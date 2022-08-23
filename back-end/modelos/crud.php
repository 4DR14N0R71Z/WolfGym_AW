<?php
interface CRUD
{
    //modifican los registros de la tabla
    public function crear();
    public function actualizar();
    public function borrar();

    //son consultas, no alteran los registros de la tabla
    //obtiene un solo registro unico por pk
    public function obtener_por_id();
    //obtiene todos los registros
    public function obtener_todo();
    //obtiene registros por campo
    public function obtener_por_campo();
}
