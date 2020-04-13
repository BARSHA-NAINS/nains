<?php 

   define("title", "Contact Me");

?>
   <div id="contact">

     <h2>Contact Me</h2>

      <form method="post" action="" id="contact-form">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" placeholder="Your name..">

          <label for="email">Email ID</label>
          <input type="text" id="email" name="emailid" placeholder="Your Email.">
        
          <label for="country">Country</label>
           <select id="country" name="country">
             <option value="india">India</option>
             <option value="japan">Japan</option>
             <option value="usa">USA</option>
             <option value="indonesia">Indonesia</option>
             <option value="argentina">Argentina</option>
           </select>
        
          <label for="feedback">Feedback</label>
           <select id="feedback" name="feedback" placeholder="what do you feel about the page?">
             <option value="amazing">Amazing</option>
             <option value="impressive">Impressive</option>
             <option value="keep it up">Keep It Up</option>
             <option value="not so good">Not So Good</option>
             <option value="boring">Boring</option>
           </select>
        
          <label for="remarks">Remarks if any</label>
          <textarea id="remarks" name="remarks" placeholder="Write something.." style="height:170px"></textarea>
          
          <input type="submit" class="button next" name="contact-submit" value="Send Message">
      </form>

   </div><!--contact-->