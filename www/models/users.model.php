<?php
class users extends DB
{
    protected $id=null;
    protected $firstname;
    protected $lastname;
    protected $email;
    protected $pwd;
    protected $status;

    public function __construct()
    {
        parent::__construct();
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function setFirstname($firstname)
    {
        $this->firstname = ucwords(strtolower(trim($firstname)));
    }
    public function setLastname($lastname)
    {
        $this->lastname = strtoupper(trim($lastname));
    }
    public function setEmail($email)
    {
        $this->email = strtolower(trim($email));
    }
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }

    
    public static function getLoginForm(){
        return [];
    }


    public static function getRegisterForm(){
        return [
                    "config"=>[
                                "method"=>"POST", 
                                "action"=>helpers::getUrl("User", "register"),
                                "class"=>"",
                                "id"=>"",
                                "submit"=>"S'inscrire"
                              ],
                    "fields"=>[

                                "firstname"=>[
                                                "type"=>"text",
                                                "required"=>true,
                                                "placeholder"=>"Votre prénom",
                                                "class"=>"",
                                                "id"=>""
                                            ],
                                "lastname"=>[
                                                "type"=>"text",
                                                "required"=>true,
                                                "placeholder"=>"Votre nom",
                                                "class"=>"",
                                                "id"=>""
                                            ],
                                "email"=>[
                                                "type"=>"email",
                                                "required"=>true,
                                                "placeholder"=>"Votre email",
                                                "class"=>"",
                                                "id"=>""
                                            ],
                                "password"=>[
                                                "type"=>"password",
                                                "required"=>true,
                                                "placeholder"=>"Votre mot de passe",
                                                "class"=>"",
                                                "id"=>""
                                            ],
                                "passwordConfirm"=>[
                                                "type"=>"password",
                                                "required"=>true,
                                                "placeholder"=>"Confirmer le mot de passe",
                                                "class"=>"",
                                                "id"=>"",
                                                "confirmWith"=>"password"
                                            ],
                                "captcha"=>[
                                                "type"=>"captcha",
                                                "required"=>true,
                                                "placeholder"=>"Saisir le texte",
                                                "class"=>"",
                                                "id"=>""
                                            ]

                              ]

                ];
    }


}


