/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package cl.aiep.examen.dao.impl;

import cl.aiep.examen.dao.ProfesorDao;
import cl.aiep.examen.dto.Profesor;
import cl.aiep.examen.util.HibernateUtil;
import java.util.List;
import org.hibernate.Session;

/**
 *
 * @author roberto
 */
public class ProfesorDaoImpl implements ProfesorDao{

    Session session = HibernateUtil.getSession();
    
    @Override
    public boolean addProfesor(Profesor profesor) {
        try{
            session.beginTransaction();
            session.save(profesor);
            session.getTransaction().commit();
            session.flush();
            return true;
        }catch(Exception e){
            System.out.println("Error al ingresar profesor");
            e.printStackTrace();
            session.getTransaction().rollback();
            return false;
        }
       
        
        
    }

    @Override
    public List<Profesor> getAllProfesor() {
        return (List<Profesor>) session.createCriteria(Profesor.class).list();
    }

    @Override
    public boolean modifyProfesor(Profesor profesor) {
        
        try{
            session.beginTransaction();
            session.clear();
            session.update(profesor);
            session.flush();
            session.getTransaction().commit();
            return true;
        }catch(Exception e){
            System.out.println("Error al modificar profesor");
            e.printStackTrace();
            session.getTransaction().rollback();
            return false;
        }
        
    }
    
    
}
