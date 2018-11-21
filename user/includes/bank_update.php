<?php 
                                    
        if(isset($_GET['edit'])){
            
        $id = $_GET['edit'];
            
        $query = "SELECT * FROM banks WHERE id = $id LIMIT 1";
        $select_bank_id = mysqli_query($conn, $query);

        while($row = mysqli_fetch_assoc($select_bank_id)){

        $id = $row['id'];
        $db_bank_name = $row['bank_name'];
        $db_bank_number = $row['bank_number'];
        $db_bank_balance = $row['bank_balance'];
}
}
        if(isset($_POST['update'])){
                    
                    $the_cat_title = $_POST['cat_title'];
                    $query = "UPDATE categories SET cat_title = '$the_cat_title' WHERE cat_id = {$cat_id} ";
                    $update_query = mysqli_query($conn, $query);
                    
                    if(!$update_query){
                        
                        die("query failed". mysqli_error($conn));
                    }
                }
                
   ?>

<form action="" method="post">
            <div class="form-group">
               <input type="text" name="bank_name" value="<?php echo $db_bank_name; ?>">
               </div>
               <div class="form-group">
              <input type="text" name="bank_number" value="<?php echo $db_bank_number; ?>"> 	
               </div>
                
             <div class="form-group">
             	<input type="text" name="bank_balance" value="<?php echo $db_bank_balance; ?>">
             </div>   
                
                
          		              
            
            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="update" value="Update Bank">
            </div>
        </form>