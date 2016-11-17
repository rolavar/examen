/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package visual;

import javax.swing.table.DefaultTableModel;

/**
 *
 * @author alejandro.espina
 */
public class MiModelo extends DefaultTableModel{
    
    public MiModelo (Object[][]data, Object[] columnNames)
    {
        super(data,columnNames);
    }
    
    public boolean isCellEditable (int row, int column)
    {
        return false;
    }
}
