/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package cl.aiep.examen.util;

import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.boot.registry.StandardServiceRegistryBuilder;
import org.hibernate.cfg.AnnotationConfiguration;
import org.hibernate.cfg.Configuration;

/**
 * Hibernate Utility class with a convenient method to get Session Factory
 * object.
 *
 * @author roberto
 */
public class HibernateUtil {

    private static final SessionFactory sessionFactory;
    private static Session session = null;
    
    static {
        try {
            // Create the SessionFactory from standard (hibernate.cfg.xml) 
            // config file.
//            Configuration configuration = new Configuration();
//        configuration.configure("hibernate.cfg.xml");
//        StandardServiceRegistryBuilder ssrb = new StandardServiceRegistryBuilder()
//                .applySettings(configuration.getProperties());
//        sessionFactory = configuration.buildSessionFactory(ssrb.build());
            sessionFactory = new Configuration().configure("hibernate.cfg.xml").buildSessionFactory();
          //  sessionFactory = new AnnotationConfiguration().configure().buildSessionFactory();
        } catch (Throwable ex) {
            // Log the exception. 
            System.err.println("Initial SessionFactory creation failed." + ex);
            throw new ExceptionInInitializerError(ex);
        }
    }
    
    public static SessionFactory getSessionFactory() {
        return sessionFactory;
    }

    public static Session getSession() {
        if(session != null && !session.isOpen())
        {
            setSession(session);
        }
        if(session == null){
            session = getSessionFactory().openSession();
        }
        return session;
    }
    
    public static void setSession(Session session)
    {
        HibernateUtil.session = session;
    }
    
    
    
}
