<?php include 'template/header.php'; ?>

<!-- Display DATA entry form below -->
    
    <br><br><div class=" container row">
        <div  class="col bg-info">
        <br>
        <h3 class="text-white display-4 text-center">Enter new SCP Subject Form</h3>
        <hr height: 5px;>
        <form name="insert" method="POST" action="connection.php" class="form-group">
            <label class="text-white">Item</label>
            
            <input type="text" name="item_no" class="form-control" placeholder="Item" required>
            <br>
            <label class="text-white">Object Class</label>
            
            <input type="text" name="object_class" class="form-control" placeholder="Object Class">
            <br>
            <label class="text-white">Image</label>
            
            <input type="text" name="subject_image" class="form-control">
            <br>
            <label class="text-white">Description</label>
            
            <textarea name="description" rows="2" class="form-control"></textarea>
            <br>
            <label class="text-white">Procedure</label>
            <textarea name="procedures" rows="2" class="form-control"></textarea>
            <br>
            <label class="text-white">Chronological History</label>
            <textarea name="ch" rows="2" class="form-control" ></textarea>
            <br>
            <label class="text-white">Space-Time Anomalies</label>
            
            <textarea name="sta" rows="2" class="form-control" ></textarea>
            <br>
            <label class="text-white">Additional Notes</label>
            <textarea name="an" rows="2" class="form-control" ></textarea>
            <br>
            <label class="text-white">Appendix A</label>
            <input type="text" name="appa" class="form-control">
            <br>
            <label class="text-white">Mental Health Effects</label>
            <textarea name="mhe" rows="2" class="form-control" ></textarea>
            <br>
            <label class="text-white">Appendix B</label>
            <input type="text" name="appb" class="form-control">
            <br>
            <label class="text-white">Date of Discovery</label>
            <input type="text" name="dod" class="form-control">
            <br>
            <label class="text-white">Object Of Origin</label>
            <textarea name="ooo" rows="1" class="form-control" ></textarea>
            <br>
            <label class="text-white">Appendix B Description</label>
            <textarea name="desb" rows="2" class="form-control" ></textarea>
            <br>
            <label class="text-white">References</label>
            <textarea name="ref" rows="2" class="form-control" ></textarea>
            <br>
            <p class="text-center">
            <input type="submit" class="btn btn-light font-weight-bold" name="submit" value="Submit Subject Data">
            </p>
            </form>
        </div>
    </div>
   <?php include 'template/footer.php'; ?>