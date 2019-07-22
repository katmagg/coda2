<?php include(form_process.php); ?>
<link rel="stylesheet" href="form.css" type="text/css"> 
<div class="container">  
                    <form id="contact" action="<?= $SERVER['PHP_SELF'];?>" method="post">
                      <h3>Hafðu samband við okkur</h3>
                      <fieldset>
                        <input placeholder="Nafn" type="text" tabindex="1"  name="name" value="<?= $name ?>" autofocus>
                        <span class="error"><?= $name_error ?></span>
                      </fieldset>
                      <fieldset>
                        <input placeholder="Netfang" type="text" name="email" value="<?= $email ?>" tabindex="2" >
                        <span class="error"><?= $email_error ?></span>

                      </fieldset>
                      <fieldset>
                        <textarea placeholder="Skrifaðu skilaboðin hér" type="text" name="message" value="<?= $message ?>" tabindex="5" ></textarea>
                      </fieldset>
                      <fieldset>
                        <button name="submit" type="submit" id="contact-submit" data-submit="...Sendi">Senda skilaboð</button>
                      </fieldset>
                      <div class ="success"><?= $success; ?></div>
                    </form>
                   
                    
                  </div>