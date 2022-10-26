<?PHP
    //dd-mm-aaaa --> aaaa-mm-dd
    //$data - >refere-se ao valor que será passado para a função
    function dataBanco($data)
    {
        $data = explode("/", $data); //[dd] [mm] [aaaa]
        $data = array_reverse($data); //[aaaa][mm][dd]
        $data = implode("-", $data); //aaaa-mm-dd

        return $data; //retorna para quem chamou a função
    }
    //aaaa-mm-dd ---> dd/mm/aaaa
    function dataTela($data)
    {
        $data = explode("-", $data); //[aaaa] [mm] [dd]
        $data = array_reverse($data); //[dd][mm][aaaa]
        $data = implode("/", $data); //dd-mm-aaaa

        return $data; //retorna para quem chamou a função

    }

    
?>