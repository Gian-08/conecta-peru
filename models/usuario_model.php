<?php 
    require "../config/conexionBD.php";

    Class Usuario {
        public function __construct()
        {
            
        }

        /*Metodo insertar usuarios*/ 
        public function insertarUsuario($empresa, $categoria,$persona_contacto, $email, $celular, $clave, $cbx_departamentos, 
            $cbx_provincias,$cbx_distritos){
            $sql= "INSERT INTO usuarios (Nom_Empresa, Categoria, 
            Nom_emprendedor,email, celular,contrasena, Departamento, Provincia, Distrito) VALUES 
            ('$empresa', '$categoria','$persona_contacto', '$email', '$celular', '$clave', '$cbx_departamentos', 
            '$cbx_provincias','$cbx_distritos')";
            return ejecutarConsulta($sql);
        }

        protected function InsertUsuario()
        {
            $insertar = new Conexion();
            $sql = "INSERT INTO usuarios(Nom_Empresa, Categoria, Nom_emprendedor, email, celular, Departamento, 
            Provincia, Distrito, contrasena) VALUES (:empresa,:categoria,:persona_contacto,:email, :celular,
            :clave, :cbx_departamentos,:cbx_provincias, :cbx_distritos)";
            $insertar = $insertar->conectar->prepare($sql);
            $insertar->bindParam(':empresa',$this->Nom_Empresa);
            $insertar->bindParam(':categoria',$this->Categoria);
            $insertar->bindParam(':persona_contacto',$this->Nom_emprendedor);
            $insertar->bindParam(':email',$this->email);
            $insertar->bindParam(':celular',$this->celular);
            $insertar->bindParam(':clave',$this->Departamento);
            $insertar->bindParam(':cbx_departamentos',$this->Provincia);
            $insertar->bindParam(':cbx_provincias',$this->Distrito);
            $insertar->bindParam(':cbx_distritos',$this->contrasena);
            
            $insertar->execute();
    
        }

        /*Metodo editar usuarios*/ 
        public function editarUsuario($IdUsuario,$correoEmpresa, $ruc, $descripcionTienda, $celular, $direccionEmpresa,
        $destino, $facebook, $instagram, $linkedin, $paginaWeb){
            $sql = "UPDATE usuarios SET 
                 correocorporativo = '$correoEmpresa', 
                RUC = $ruc,
                 descripcionTienda = '$descripcionTienda',
               celular = '$celular',
                direccionEmpresa =  '$direccionEmpresa',
                logotipo = '$destino',
                facebook = '$facebook',
                instagram = '$instagram',
                linkedin = '$linkedin',
                paginaWeb = '$paginaWeb' WHERE IdUsuario = '$IdUsuario'";
        }

    }
