/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package cl.aiep.examen.dao;

import cl.aiep.examen.dto.Profesor;
import java.util.List;

/**
 *
 * @author roberto
 */
public interface ProfesorDao {
    
    public boolean addProfesor(Profesor profesor);
    public List<Profesor> getAllProfesor();
    public boolean modifyProfesor(Profesor profesor);
    
}
