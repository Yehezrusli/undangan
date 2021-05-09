<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location:index.php");
}
include("header.php");
?>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h3 class="text-center">Add Guest</h3>
                <form method="POST" action="adduser.php" class="pt-2">
                    <div class="form-group">
                        <label for="InputUserName">Guest Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <br>
                    <button type="submit" name="add" class="btn btn-primary mx-auto">Submit</button>

                    <?php
                       
                        if (isset($_POST['add'])) {
                            $name = $_POST['name'];
                        
                            // Display the original string
                            //echo "Original String: " . $simple_string;
                            
                            // Store the cipher method
                            $ciphering = "AES-128-CTR";
                            
                            // Use OpenSSl Encryption method
                            $iv_length = openssl_cipher_iv_length($ciphering);
                            $options = 0;
                            
                            // Non-NULL Initialization Vector for encryption
                            $encryption_iv = '1234567891011121';
                            
                            // Store the encryption key
                            $encryption_key = "Undangan";
                            
                            // Use openssl_encrypt() function to encrypt the data
                            $encryption = openssl_encrypt($name, $ciphering,
                                        $encryption_key, $options, $encryption_iv);


                            $insert_penatua = "INSERT INTO Tamu (name, hash_name) VALUES ('$name', '$encryption')";
                            if($con->query($insert_penatua)){
                                echo $url . $encryption;
                            }else{
                                echo "gagal";
                            }
                            
                            // Display the encrypted string
                            

                            // $decryption_iv = '1234567891011121';
                            
                            // // Store the decryption key
                            // $decryption_key = "Undangan";
                            
                            // // Use openssl_decrypt() function to decrypt the data
                            // $decryption=openssl_decrypt ($encryption, $ciphering, 
                            //         $decryption_key, $options, $decryption_iv);
                            
                            // // Display the decrypted string
                            // echo "Decrypted String: " . $decryption;
                            }

                        ?>

                </form>
            </div>
        </div>
    </div>

</body>
</html>