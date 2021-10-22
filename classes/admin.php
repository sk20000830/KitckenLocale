<?php

    require_once "database.php";

    class Admin extends Database{

        public function addmenu($Mname, $category, $ingredient, $price, $Mpic, $MpicTmp, $target_file){

            $sql = "INSERT INTO menu(menu_name, category, ingredient, menu_price, menu_pic) VALUES('$Mname', '$category', '$ingredient', '$price', '$Mpic')";
            if($this->conn->query($sql))
            {
                move_uploaded_file($MpicTmp, $target_file);
                header("Location: ../admin/menu.php");
            }
            else
            {
                echo "Error in updating." .$conn->error;
            }
        }

        public function manage_delivery($Dtime){

            if($Dtime == "0")
            {
                $sql = "UPDATE delivery SET delivery_status = 'U'";

                if($this->conn->query($sql))
                {
                    header ("Location: ../admin/orders.php");
                }
                else
                {
                    echo $this->conn->erorr;
                }
            }
            elseif($Dtime > 0)
            {
                $sql = "UPDATE delivery SET delivery_time = '$Dtime', delivery_status = 'A'";

                if($this->conn->query($sql))
                {
                    header ("Location: ../admin/orders.php");
                }
                else
                {
                    echo $this->conn->erorr;
                }
            }
            else
            {
                header("Location: ../admin/orders.php");
            }
        }

        public function display_delivery(){

            $sql = "SELECT * FROM delivery";
            $result = $this->conn->query($sql);

            return $result->fetch_assoc();
            
        }

        public function get_Dstatus(){

            $sql = "SELECT * FROM delivery";
            $result = $this->conn->query($sql);
            $row = $result->fetch_assoc();

            if($row["delivery_status"] == "A")
            {
                return Available;
            }
            elseif($row["delivery_status"] == "U")
            {
                return Unavailable;
            }
        }

        public function get_menuData(){

            $sql = "SELECT * FROM menu";
            $result = $this->conn->query($sql);

            while($row = $result->fetch_assoc())
            {
                $menuData[] = $row;
            }
            return $menuData;
        }

        public function get_1menuData($Cmenu){

            $sql = "SELECT * FROM menu WHERE menu_id = '$Cmenu'";
            $result = $this->conn->query($sql);

            return $result->fetch_assoc();

            
        }

        public function delete_menu($Cmenu, $action){

            if($action == "delete") 
            {
                $sql = "DELETE FROM menu WHERE menu_id = '$Cmenu'";
                $result = $this->conn->query($sql);

                if($result == TRUE)
                {
                    header("Location: ../admin/menu.php");
                }
                else
                {
                    die($this->conn->erorr);
                }
            }
            else
            {
                header("Location: ../admin/menu.php");
            }
        }

        public function update_menu($Mname, $category, $ingredient, $price, $Mpic, $MpicTmp, $target_file, $Cmenu){

            $sql = "UPDATE menu SET  menu_name='$Mname', category='$category', ingredient='$ingredient', menu_price='$price', menu_pic='$Mpic' WHERE menu_id = '$Cmenu'";  

            if($this->conn->query($sql))
            {
                move_uploaded_file($MpicTmp, $target_file);
                header ("Location: ../admin/menu.php");
            }
            else
            {
                echo $this->conn->erorr;
            }               
        }

        public function update_menu_noPic($Mname, $category, $ingredient, $price, $Cmenu){

            $sql = "UPDATE menu SET  menu_name='$Mname', category='$category', ingredient='$ingredient', menu_price='$price' WHERE menu_id = '$Cmenu'";  

            if($this->conn->query($sql))
            {
                header ("Location: ../admin/menu.php");
            }
            else
            {
                echo $this->conn->erorr;
            }        
        }

        public function get_userData(){

            $sql = "SELECT * FROM users WHERE status != 'A'";
            $result = $this->conn->query($sql);

            if($result == TRUE)
            {
                while($row = $result->fetch_assoc())
                {
                    $userData[] = $row;
                }
            }
            else
            {
                echo $this->conn->erorr;
            }   

            return $userData;
        }

        public function get_1userData($userID){

            $sql = "SELECT * FROM users WHERE user_id = '$userID'";
            $result = $this->conn->query($sql);

            if($result == TRUE)
            {
                $row = $result->fetch_assoc();

                return $row;
            }
            else
            {
                echo $this->conn->erorr;
            }   

            
        }

        public function update_User($fname, $lname, $contact, $email, $adress, $count, $userID){

            $sql = "UPDATE users SET first_name = '$fname', last_name = '$lname', contact_number = '$contact', email = '$email', adress = '$adress', order_count = '$count' WHERE user_id = '$userID'";

            if($this->conn->query($sql))
            {
                header("Location: ../admin/users.php");
            }
            else
            {
                echo $this->conn->erorr;
            }    
        }

        public function delete_user($userID, $action){

            if($action == "delete") 
            {
                $sql = "DELETE FROM users WHERE user_id = '$userID'";
                $result = $this->conn->query($sql);

                if($result == TRUE)
                {
                    header("Location: ../admin/users.php");
                }
                else
                {
                    die($this->conn->erorr);
                }
            }
            else
            {
                header("Location: ../admin/users.php");
            }
        }

        public function add_User($fname, $lname, $pass, $contact, $email, $adress){

            $pass = password_hash($pass, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users(first_name, last_name, password, contact_number, email, adress) 
                    VALUES('$fname', '$lname', '$pass', '$contact', '$email', '$adress')";

            if($this->conn->query($sql))
            {
                header("Location: ../admin/users.php");
            }
            else
            {
                echo "<p class='alert text-center'>".$this->conn->erorr."</p>";
            }
        }

        public function get_orderData(){

            $sql = "SELECT * FROM order INNER JOIN users ON users.user_id = order.user_id";
            $result = $this->conn->query($sql);

            if($result == TRUE)
            {
                while($row = $result->fetch_assoc())
                {
                    $orderData[] = $row;
                }

                return $orderData;
            }
            else
            {
                echo "<p class='alert text-center'>".$this->conn->erorr."</p>";
            }


        }
        
    }
?>              