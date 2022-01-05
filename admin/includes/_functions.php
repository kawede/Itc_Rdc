<?php 
 class Users{
     private $db;
    public function __construct($db){
        if(!isset($_SESSION)){
            session_start();
        }
        if(!isset($_SESSION['uservisiteur'])){
            $_SESSION['uservisiteur']=array();
        }
        $this->db=$db;
    }
        function onSignin($_email, $_motpasse, $table)
    {
        $req = $this->db->prepare("SELECT * FROM $table WHERE _email = ? AND _motpasse = ? LIMIT 1");
        try {
            $req->execute([$_email, $_motpasse]);
            $req = $req->fetchAll();
            if (!empty($req)) {
                $this->login($req[0]);
                // var_dump($req);
                return array("status" => 200, "message" => $req);
            } else return array("status" => 405, "message" => "uknown user");
        } catch (\Throwable $th) {
            return array("status" => 500, "message" => "erreur serveur");
        }
    }
        public function login($id_userVisiteur)
    {
        
        if (is_array($id_userVisiteur)) {
            $result = $id_userVisiteur;
                // var_dump($result);
                $_SESSION['uservisiteur']['user_id'] = $result['_id'];
                $_SESSION['uservisiteur']['user_nom'] = $result['_nom'];
                $_SESSION['uservisiteur']['user_email']= $result['_email'];
                $_SESSION['uservisiteur']['user_motpasse'] = $result['_motpasse'];
                $_SESSION['uservisiteur']['niveau'] = $result['_idrole'];
                $_SESSION['uservisiteur']['security'] = true;
        }
    }

    public function logout()
    {
        session_destroy();
    } 
}


function comptUtiLISATEUR($db){
    $re = $db->prepare('SELECT COUNT(*) FROM _admin');
    $re->execute();
    $re = $re->fetchColumn();
    return (int)$re;
}
function onRetrieveEvent($db, $idsession, $userrole){
    try {  
         $tabOption = [];
    $re = ($userrole === 2) ? $db->prepare('SELECT * FROM _evenement') : $db->prepare('SELECT * FROM _evenement WHERE _idusers = ?');
    $re->execute([$idsession]);
    $re = $re->fetchAll();
    if(empty($re)) return array();
    for($i = 0; $i < count($re); $i++){
       array_push($tabOption, array(($re[$i]['_id'])=>($re[$i]['_nom']))); 
    }
    return $tabOption;
    
} catch(Exception $e) {
    exit('Probleme du fonction onRetrieveEvent');
}  
}
function comptCour($db){
    $re = $db->prepare('SELECT COUNT(*) FROM cour');
    $re->execute();
    $re = $re->fetchColumn();
    return (int)$re;
}
function comptEvenemnt($db, $idsession, $userrole){
    $re = ($userrole === 2) ? $db->prepare('SELECT COUNT(*) FROM _evenement') : $db->prepare('SELECT COUNT(*) FROM _evenement WHERE _idusers = ?');
    $re->execute([$idsession]);
    $re = $re->fetchColumn();
    return (int)$re;
}

function comptprogramme($db){
    $re = $db->prepare('SELECT COUNT(*) FROM programme');
    $re->execute();
    $re = $re->fetchColumn();
    return (int)$re;
}
function countfomateur($db){
    $re=$db->prepare('SELECT COUNT(*) from cour');
    $re->execute();
    $re=$re->fetchColumn();
    return(int)$re;
}
function comptecommunique($db){
    $re=$db->prepare('SELECT COUNT(*) from _communique');
    $re->execute();
    $re=$re->fetchColumn();
    return(int)$re;
}
function comptelcoaching($db){
    $re=$db->prepare('SELECT COUNT(*) from _coaching');
    $re->execute();
    $re=$re->fetchColumn();
    return(int)$re;
}
function comptcontact($db){
    $re=$db->prepare('SELECT COUNT(*) from contact');
    $re->execute();
    $re=$re->fetchColumn();
    return(int)$re;
}
function comptVisitor($db){
    $re = $db->prepare('SELECT _idUser FROM _visitor GROUP BY _idUser');
    $re->execute();
    $re = $re->fetchAll();
    return (int)(count($re));
}
function _addVisitedPage($cokkie,$page,$db){
    $re = $db->prepare('INSERT INTO _visitor (_idUser, _page) VALUES (?,?)');
    $re->execute([$cokkie,$page]);
}

function mt_random_float($min, $max) {
    $float_part = mt_rand(0, mt_getrandmax())/mt_getrandmax();
    $integer_part = mt_rand($min, $max - 1);
    return $integer_part + $float_part;
}


function comptcomentaire($db,$id){
    $re = $db->prepare('SELECT COUNT(*) FROM _evenement WHERE _idusers=:id');
    $re->execute(array(
        'id'=>$id
    ));
    $re = $re->fetchColumn();
    return (int)$re;
}




if (isset($_POST['logout'])) {
    Users::logout();
    header('Location:index.php');
}

function isAuthenticated()
{
    return (isset($_SESSION['user']) && $_SESSION['user'])
        || (isset($_SESSION['uservisiteur']) && $_SESSION['uservisiteur']);
}

if (strpos($_SERVER['REQUEST_URI'], 'admin') !== false && !isAuthenticated()) {
    if (strpos($_SERVER['REQUEST_URI'], 'login') === false) {
        header('Location: login.php');
    }
}

