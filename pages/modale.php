<?php
include('../inc/header.php');
?>
<body id="body">
   <main id="main-wrapper" aria-hidden="false">
       <!-- Content of your web page goes here -->
       <h1>Your web page</h1>
       <p>
           <button class="open-modal-btn">Open modal</button>
       </p>
   </main>
   <div class="modal" aria-hidden="true" role="dialog" aria-describedby="modalTitle">
       <div>
           <header>
               <h2 id="modalTitle" class="modal-title">Modal title</h2>
           </header>
           <div>
               <p>Content of your modal window</p>
           </div>
           <button class="modal-close-btn">Close modal</button>
       </div>
   </div>
   <?php
include('../inc/footer.php');
?>