<?php
require_once "database.php";

class User extends Database{

        public function login($email, $pass){

            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = $this->conn->query($sql);

            if($result == TRUE)
            {
                if($result->num_rows == 1)
                {
                    $row = $result->fetch_assoc();

                    if(password_verify($pass, $row["password"]))
                    {
                        session_start();

                        $_SESSION["user_id"] = $row["user_id"];
                        $_SESSION["status"] = $row["status"];
                        
                        if($row["status"] == "A")
                        {
                            header("Location: ../admin/orders.php");
                        }
                        else
                        {                                     
                            header("Location: ../index.php");     
                        }
                    }
                    else
                    {
                        echo "<p class='alert text-center'>Incorrect Password</p>";
                    }
                }
                else
                {
                    echo "Username not found. click <a href='../login.php'>here</a> to go back";
                }
            }
            else
            {
                die("Error in loggin in: " .$this->conn->error);
            }
        }

        public function verify_pass($email, $pass){

            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = $this->conn->query($sql);

            if($result == TRUE)
            {
                if($result->num_rows == 1)
                {
                    $row = $result->fetch_assoc();

                    if(password_verify($pass, $row["password"]))
                    {
                            header("Location: ../edit-profile.php");
                    }
                    else
                    {
                        header("Location: ../password-verify.php?message=incorrect");
                    }
                }
                else
                {
                    echo "Username not found. click <a href='../login.php'>here</a> to go back";
                }
            }
            else
            {
                die("Error in loggin in: " .$this->conn->error);
            }
        }

        public function update_User($fname, $lname, $npass, $cpass, $contact, $email, $adress, $Cid){

            if($npass == $cpass)
            {
                $npass = password_hash($npass, PASSWORD_DEFAULT);
                $sql = "UPDATE users SET 
                first_name = '$fname', last_name = '$lname', password = '$npass', contact_number = '$contact', 
                email = '$email', adress = '$adress' WHERE user_id = '$Cid'";

                if($this->conn->query($sql))
                {
                    header("Location: ../profile.php");
                }
                else
                {
                    echo "<p class='alert text-center'>".$this->conn->erorr."</p>";
                }
            }   
            else
            {
                header("Location: ../edit-profile.php?message=incorrect");
            }

        }

        public function update_User_NoPass($fname, $lname, $contact, $email, $adress, $Cid){

            $sql = "UPDATE users SET 
            first_name = '$fname', last_name = '$lname', contact_number = '$contact', 
            email = '$email', adress = '$adress' WHERE user_id = '$Cid'";

            if($this->conn->query($sql))
            {
                header("Location: ../profile.php");
            }
            else
            {
                echo "<p class='alert text-center'>".$this->conn->error."</p>";
            }                    
        }

        public function update_adress($fname, $lname, $contact, $email, $adress, $Cid){

            $sql = "UPDATE users SET 
            first_name = '$fname', last_name = '$lname', contact_number = '$contact', 
            email = '$email', adress = '$adress' WHERE user_id = '$Cid'";

            if($this->conn->query($sql))
            {
                header("Location: ../delivery-info.php");
            }
            else
            {
                echo "<p class='alert text-center'>".$this->conn->error."</p>";
            }                    
        }

        public function get_1userdata($Cid){

            $sql = "SELECT * FROM users WHERE user_id = '$Cid'";
            $result = $this->conn->query($sql);

            if($result == TRUE)
            {
                return $result->fetch_assoc();
            }
            else
            {
                echo "<p class='alert text-center'>".$this->conn->error."</p>";
            }
        }

        public function createUser($fname, $lname, $pass, $contact, $email, $adress){

            $pass = password_hash($pass, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users(first_name, last_name, password, contact_number, email, adress) 
                    VALUES('$fname', '$lname', '$pass', '$contact', '$email', '$adress')";

            if($this->conn->query($sql))
            {
                header("Location: ../login.php");
            }
            else
            {
                echo "<p class='alert text-center'>".$this->conn->error."</p>";
            }
        }

        public function get_MmenuData(){

            $sql = "SELECT * FROM menu WHERE category = 'Main'";
            $result = $this->conn->query($sql);

            while($row = $result->fetch_assoc())
            {
                $menuData[] = $row;
            }
            return $menuData;
        }

        public function get_SmenuData(){

            $sql = "SELECT * FROM menu WHERE category = 'Side'";
            $result = $this->conn->query($sql);

            while($row = $result->fetch_assoc())
            {
                $menuData[] = $row;
            }
            return $menuData;
        }

        public function get_DEmenuData(){

            $sql = "SELECT * FROM menu WHERE category = 'Desert'";
            $result = $this->conn->query($sql);

            while($row = $result->fetch_assoc())
            {
                $menuData[] = $row;
            }
            return $menuData;
        }

        public function get_DRmenuData(){

            $sql = "SELECT * FROM menu WHERE category = 'Drink'";
            $result = $this->conn->query($sql);

            while($row = $result->fetch_assoc())
            {
                $menuData[] = $row;
            }
            return $menuData;
        }

        public function get_menuPrice($menuID){

            $sql = "SELECT * FROM menu where menu_id = '$menuID'";
            $result = $this->conn->query($sql);

            if($result == TRUE)
            {
                $row = $result->fetch_assoc();
                
                return $row["menu_price"];
            }
            else
            {
                echo "<p class='alert text-center'>".$this->conn->error."</p>";
            }
        }

        public function add_toCart($menuID, $sub, $Cid){

            $sql = "SELECT * FROM cart WHERE product_id = '$menuID' AND user_id = '$Cid'";
            $result = $this->conn->query($sql);
            $row = $result->fetch_assoc();
            $Nquantity = $row["quantity"] + 1;
            $cartId = $row["cart_id"];

            if($result->num_rows == "1")
            {
                $sql = "UPDATE cart SET quantity = '$Nquantity' WHERE cart_id = '$cartId'";

                if($this->conn->query($sql))
                {
                    header("Location: ../cart.php");
                }
                else
                {
                    echo "<p class='alert text-center'>".$this->conn->error."</p>";
                }
            }
            else
            {
                $sql = "INSERT INTO cart(product_id, subtotal, user_id) VALUES('$menuID', $sub, '$Cid')";

                if($this->conn->query($sql))
                {
                    header("Location: ../cart.php");
                }
                else
                {
                    echo "<p class='alert text-center'>".$this->conn->error."</p>";
                }
            }
                
        }

        public function get_cartData($Cid){

            $sql = "SELECT * FROM cart INNER JOIN menu ON menu.menu_id = cart.product_id WHERE cart.user_id = '$Cid'";
            $result = $this->conn->query($sql);

            if($result == TRUE)
            {
                while($row = $result->fetch_assoc())
                {
                    $orderdata[] = $row;
                }

                return $orderdata;
            }
            else
            {
                echo "<p class='alert text-center'>".$this->conn->error."</p>";
            }
            
        }

        public function change_num($num, $sub, $Sid){

            if($num > 0)
            {
                $sql = "UPDATE cart SET quantity = '$num', subtotal = '$sub' WHERE cart_id = '$Sid'";

                if($this->conn->query($sql))
                {
                    header("Location: ../cart.php");
                }
            }
            elseif($num == 0)
            {
                $sql = "DELETE from cart WHERE cart_id = '$Sid'";

                if($this->conn->query($sql))
                {
                    header("Location: ../cart.php");
                }
            }
            else
            {
                header("Location: ../cart.php");
            }             
        }

        public function sum_subtotal($Cid){

            $sql = "SELECT * FROM cart WHERE user_id = '$Cid'";
            $result = $this->conn->query($sql);
            $sub = 0;

            if($result == TRUE)
            {
                while($row = $result->fetch_assoc())
                {
                    $sub += $row['subtotal'];
                }             
                return $sub;
            }
            else
            {
                echo "<p class='alert text-center'>".$this->conn->error."</p>";
            }
        }

        public function get_Dfee(){

            $sql = "SELECT * FROM delivery WHERE delivery_id = '1'";
            $result = $this->conn->query($sql);

            if($result == TRUE)
            {
                $row = $result->fetch_assoc();

                return $row["delivery_fee"];
            }
            else
            {
                echo "<p class='alert text-center'>".$this->conn->error."</p>";
            }
        }

        public function sum_total($Cid){
            
            $sub = $this->sum_subtotal($Cid);
            $Dfee = $this->get_Dfee();
            return $sub + $Dfee;
        }

        public function sum_quantity($Cid){

            $sql = "SELECT * FROM cart WHERE user_id = '$Cid'";
            $result = $this->conn->query($sql);
            $totalQ = 0;

            if($result == TRUE)
            {
                while($row = $result->fetch_assoc())
                {
                    $totalQ += $row['quantity'];
                }
                return $totalQ;
            }
            else
            {
                echo "<p class='alert text-center'>".$this->conn->error."</p>";
            }  
        }

        public function organize_info($selectD, $pretime, $insttime, $open, $close, $Aonehour){

            if($selectD == "instant")
            {
                if($insttime >= $open && $insttime <= $close)
                {
                    return $insttime;
                }
                else
                {
                    header("Location: delivery-info.php?message=unavailable");
                }    
            }
            elseif($selectD == "pre")
            {
                if($pretime >= $open && $pretime <= $close && $pretime >= $Aonehour)
                {
                    return $pretime;
                }
                else
                {
                    header("Location: delivery-info.php?message=unavailable");
                }            
            }
        }

        public function add_order($orderD, $deliveryT, $totalQ, $totalP, $note, $Cid){

            //insert into orders table
            $sql = "INSERT INTO orders(order_date, delivery_time, total_quantity, total_price, note, user_id) VALUES('$orderD', '$deliveryT', '$totalQ', '$totalP', '$note', '$Cid')";
            $result = $this->conn->query($sql);
            $orderID = $this->conn->insert_id;
            
            if($result == TRUE)
            {
                //update order_count
                $sql = "SELECT * FROM orders WHERE user_id = '$Cid'";
                $result = $this->conn->query($sql);
                $Ocount = $result->num_rows;
                $sql = "UPDATE users SET order_count = '$Ocount' WHERE user_id = '$Cid'";

                if($this->conn->query($sql))
                {
                    //get cart data
                    $sql = "SELECT * FROM cart WHERE user_id = '$Cid'";
                    $result = $this->conn->query($sql);

                    while($row = $result->fetch_assoc())
                    {
                        //insert into order_items table
                        $productID = $row["product_id"];
                        $quantity = $row["quantity"];
                        $sql = "INSERT INTO order_items(order_id, product_id, quantity) VALUES('$orderID', '$productID', '$quantity')";

                        if($this->conn->query($sql))
                        {
                            $sql = "DELETE FROM cart WHERE user_id = '$Cid'";
                            if($this->conn->query($sql))
                            {
                                header("Location: ../order-success.php?order_id=$orderID");
                            }
                            else
                            {
                                echo $this->conn->error;
                            }   
                        }   
                        else
                        {
                            echo $this->conn->error;
                        }             
                    }
                }
                else
                {
                    echo $this->conn->error;
                }
            }
            else
            {
                echo $this->conn->error;
            }  
        } 

        public function get_deliveryTime($Oid){

            $sql = "SELECT * FROM orders WHERE order_id = '$Oid'";
            $result = $this->conn->query($sql);

            if($result == TRUE)
            {
                return $result->fetch_assoc();;
            }
            else
            {
                echo $this->conn->error;
            } 
        }

        public function get_productName(){

            $sql = "SELECT * FROM menu LIMIT 4";
            $result = $this->conn->query($sql);

            if($result == TRUE)
            {
                while($row = $result->fetch_assoc())
                {
                    $Pname[] = $row["menu_name"];
                }
                    return $Pname;
            }
            else
            {
                echo $this->conn->error;
            } 
        }
        

}

?>