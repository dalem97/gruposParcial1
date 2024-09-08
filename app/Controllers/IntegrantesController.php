<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Integrantes;
class IntegrantesController extends Controller{

    public function cargarIntegrantes(){
        $integrante = new Integrantes();
        $resultado['resultado'] = $integrante->findAll();
        return view('view_integrantes',$resultado);
    }


    public function eliminarIntegrantes($integrante_id = null) {
        log_message('debug', 'El valor del ID a eliminar es: ' . $integrante_id);
        $integrante = new Integrantes();
        $integrante->delete($integrante_id);
        return $this->cargarIntegrantes();
    }
    

    public function guardarIntegrantes(){
        $integrante_id = $this->request->getVar('txt_codigo');
        $nombre = $this->request->getVar('txt_nombre');
        $apellido = $this->request->getVar('txt_apellido');
        $fecha_nacimiento = $this->request->getVar('txt_fechaNac');
        $fecha_muerte = $this->request->getVar('txt_fechaMuerte');
        $web_oficial = $this->request->getVar('txt_webOficial');
        $pais_nacimiento = $this->request->getVar('txt_pais');

        $integrante = new Integrantes();
        $datos=['integrante_id'=>$integrante_id,
                'nombre'=>$nombre,
                'apellido'=>$apellido,
                'fecha_nacimiento'=>$fecha_nacimiento,
                'fecha_muerte'=>$fecha_muerte,
                'web_oficial'=>$web_oficial,
                'pais_nacimiento'=>$pais_nacimiento
        ];
        $integrante->insert($datos);
        return $this->cargarIntegrantes();
    }


    public function localizarIntegrantes($integrante_id=null){
       $integrante = new Integrantes();
        $datosIntegrantes['datosIntegrantes']=$integrante->where('integrante_id',$integrante_id)->first();
        return view('frm_actualizarIntegrante',$datosIntegrantes);
    }

    public function modificarIntegrantes(){
        $integrante_id = $this->request->getPost('txt_codigo');
        $nombre = $this->request->getVar('txt_nombre');
        $apellido = $this->request->getVar('txt_apellido');
        $fecha_nacimiento = $this->request->getVar('txt_fechaNac');
        $fecha_muerte = $this->request->getVar('txt_fechaMuerte');
        $web_oficial = $this->request->getVar('txt_webOficial');
        $pais_nacimiento = $this->request->getVar('txt_pais');

        $integrante = new Integrantes();

        $datos=['integrante_id'=>$integrante_id,
                'nombre'=>$nombre,
                'apellido'=>$apellido,
                'fecha_nacimiento'=>$fecha_nacimiento,
                'fecha_muerte'=>$fecha_muerte,
                'web_oficial'=>$web_oficial,
                'pais_nacimiento'=>$pais_nacimiento
        ];
        $integrante->update($integrante_id,$datos);
        return $this->cargarIntegrantes();
    }

  

}