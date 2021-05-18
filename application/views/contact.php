<section id="contact">
    <div class="content">
        <h1 class="contact-title">Contact Me</h1>
        <div class="contact-content">
            <form action="http://henriquecarvalho.me" method="post" id="register">
                <link href="<?php echo base_url(); ?>css/contact.css" rel="stylesheet">
                <div class="name">
                    <input class="boxShadow" type="text" name="name" id="name" placeholder="Name *" required="">
                </div>
                <div class="subject">
                    <input class="boxShadow" type="text" name="subject" id="subject" placeholder="Subject *" required="">
                </div>
                <div class="email">
                    <input class="boxShadow" type="email" name="email" id="email" placeholder="Email *" required="">
                </div>
                <div class="message">
                    <textarea class="boxShadow" id="message" name="message" placeholder="Message *" required=""></textarea>
                    <label id="counter"></label>
                </div>
                <input type="submit" value="Submit" class="submit">
            </form>
        </div>
    </div>
</section>