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
                                                "class"=>"form-control",
                                                "id"=>"",
                                                "minlength"=>2,
                                                "maxlength"=>50,
                                                "errMsg"=>"Votre prénom doit faire entre 2 et 50 caractères"
                                            ],
                                "lastname"=>[
                                                "type"=>"text",
                                                "required"=>true,
                                                "placeholder"=>"Votre nom",
                                                "class"=>"form-control",
                                                "id"=>"",
                                                "minlength"=>2,
                                                "maxlength"=>100,
                                                "errMsg"=>"Votre nom doit faire entre 2 et 100 caractères"
                                            ],
                                "email"=>[
                                                "type"=>"email",
                                                "required"=>true,
                                                "placeholder"=>"Votre email",
                                                "class"=>"form-control",
                                                "id"=>"",
                                                "errMsg"=>"Votre email est incorrect"
                                            ],
                                "password"=>[
                                                "type"=>"password",
                                                "required"=>true,
                                                "placeholder"=>"Votre mot de passe",
                                                "class"=>"form-control",
                                                "id"=>"",
                                                "errMsg"=>"Votre mot de passe doit contenir une majuscule et une minuscule avec au moins 8 caractères"
                                            ],
                                "passwordConfirm"=>[
                                                "type"=>"password",
                                                "required"=>true,
                                                "placeholder"=>"Confirmer le mot de passe",
                                                "class"=>"form-control",
                                                "id"=>"",
                                                "confirmWith"=>"password",
                                                "errMsg"=>"Votre confirmation de mot de passe ne correspond pas"
                                            ],
                                "captcha"=>[
                                                "type"=>"captcha",
                                                "required"=>true,
                                                "class"=>"form-control",
                                                "id"=>"",
                                                "placeholder"=>"Veuillez saisir le captcha",
                                                "errMsg"=>"Le captcha est incorrect"
                                            ]

                              ]

                ];
    }


}


