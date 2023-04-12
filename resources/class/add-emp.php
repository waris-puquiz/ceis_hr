<?php
class add_employee extends config{
    public $emp_id;
    public $L_name;
    public $F_name;
    public $M_name
    public $age;
    public $date_birth;
    public $gender;
    public $c_status;
    public $H_address;
    public $contact_number;
    public $email_add;
    public $position;
    public $dept;
    public $date_hired;
    public $emp_status;
    public $rank;
    public $salary;
    public $date_permanency;
    public $sss;
    public $philh;
    public $pag_ibig;
    public $tin;
    public $B_degree;
    public $major;
    public $H_received;
    public $M_degree;
    public $D_degree;
    public $license;
    public $v_leave;
    public $s_leave;
    public $e_leave;
    public $mp_leave;
    public $sp_leave;
    public $others;
    public $emgncy_person;
    public $emgncy_relation;
    public $emgncy_contactnumber;
    public $emgncy_address;  
    
    public function __construct($emp_id=NULL,$L_name=NULL,$F_name=NULL,$M_name=NULL,
    $age=NULL,$date_birth=NULL,$gender=NULL,$c_status=NULL,$H_address=NULL,$contact_number=NULL,$email_add=NULL,$position=NULL,$dept=NULL,$date_hired=NULL,$emp_status=NULL,$rank=NULL,
    $salary=NULL,$date_permanency=NULL,$sss=NULL,
    $philh=NULL,$pag_ibig=NULL,
    $tin=NULL,
    $B_degree=NULL,$major=NULL,$H_received=NULL,$M_degree=NULL,$D_degree=NULL,$license=NULL,$v_leave=NULL,$s_leave=NULL,$e_leave=NULL,$mp_leave=NULL,$sp_leave=NULL,$others=NULL,$emgncy_person=NULL,$emgncy_relation=NULL,$emgncy_contactnumber=NULL,$emgncy_address=NULL){
        $this->emp_id = $emp_id;
        $this->L_name = $L_name;
        $this->F_name = $F_name;
        $this->M_name = $M_name;
        $this->age = $age;
        $this->date_birth = $date_birth;
        $this->gender = $gender;
        $this->c_status = $c_status;
        $this->H_address = $H_address;
        $this->contact_number = $contact_number;
        $this->email_add = $email_add;
        $this->position = $position;
        $this->dept = $dept;
        $this->date_hired = $date_hired;
        $this->emp_status = $emp_status;
        $this->rank = $rank;
        $this->salary = $salary;
        $this->date_permanency = $date_permanency;
        $this->sss = $sss;
        $this->philh = $philh;
        $this->pag_ibig = $pag_ibig;
        $this->tin = $tin;
        $this->B_degree = $B_degree;
        $this->major = $major;
        $this->H_received = $H_received;
        $this->M_degree = $M_degree;
        $this->D_degree = $D_degree;
        $this->license = $license; 
        $this->v_leave  = $v_leave;
        $this->s_leave = $s_leave;
        $this->e_leave = $e_leave; 
        $this->mp_leave = $mp_leave;
        $this->sp_leave = $sp_leave; 
        $this->others = $others;
        $this->emgncy_person = $emgncy_person;
        $this->emgncy_relation = $emgncy_relation;
        $this->emgncy_contactnumber = $emgncy_contactnumber;
        $this->emgncy_address = $emgncy_address;
    }
    public function add_emps(){
        $con = $this->con();
        $sql = "INSERT INTO `employee_record`( `emp_id`, `L_name`, `F_name`, `M_name`, `age`, `date_birth`, `gender`, `c_status`, `H_address`, `contact_number`, `email_add`, `position`, `dept`, `date_hired`, `emp_status`, `rank`, `salary`, `date_permanency`, `sss`, `philh`, `pag_ibig`, `tin`, `B_degree`, `major`, `H_received`, `M_degree`, `D_degree`, `license`, `v_leave`, `s_leave`, `e_leave`, `mp_leave`, `sp_leave`, `others`, `emgncy_person`, `emgncy_relation`, `emgncy_contactnumber`, `emgncy_address`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $data=$con->prepare($sql);
       if($data->execute([$this->emp_id,$this->L_name,$this->F_name,$this->M_name,$this->age,$this->date_birth,$this->gender,$this->c_status,$this->H_address,$this->contact_number,$this->email_add,$this->position,$this->dept,$this->date_hired,$this->emp_status,$this->rank,$this->salary,$this->date_permanency,$this->sss,$this->philh,$this->pag_ibig,$this->tin,$this->B_degree,$this->major,$this->H_received,$this->M_degree,$this->D_degree,$this->license,$this->v_leave,$this->s_leave,$this->e_leave,$this->mp_leave,$this->sp_leave,$this->others,$this->emgncy_person,$this->emgncy_relation,$this->emgncy_contactnumber,$this->emgncy_address,])){
        return true;
       }else{
        return false;
       }
       

    }
}
?>