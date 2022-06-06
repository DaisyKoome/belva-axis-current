<?php
/**
 *
 * Template Name: Product
 *
 * The template for displaying content from pagebuilder.
 *
 * This is the template that displays pages without title in fullwidth layout. Suitable for use with Pagebuilder.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Axis
 */

get_header(); ?>


<section class="fill-inner">
<!-- <h2 class="centre">Contact Us</h2> -->
</section>
<section class="inside-pages-topper">
<h2 class="centre">Features</h2>
</section>
<!-- end-of-header -->
<!-- chat-box-->
<section class="chat-box" style="padding: 0;">
        <div class="package">
            <!-- card -->
            <div class="wrapper">
            <div class="card-left">
                <div class="col-content">
                    <span class="blue-text">Communicate Better </span>
                    <h1 class="chat-box-heading">WhatsApp Chatbot</h1>
                    <div><?php echo the_field('whatsapp_chatbot_content'); ?></div>

                    

                     <a class="btn primary-btn" href="<?php echo home_url('/features/whatsapp-chatbot/'); ?>" target="_blank"><span>Learn More</span></a>
                </div>
                <div class="col-img">
                    <img src="<?php echo the_field('whatsapp_chatbot_image'); ?>"> </div>
            </div>
            </div>
        </div>
        <div class="package">
            <div class="wrapper">
                <div class="card-left">
                    <div class="col-content">
                        <span class="blue-text">Team Inbox</span>
                        <h1 class="chat-box-heading">Multi-Agent Unified Inbox</h1>
                        <div><?php echo the_field('multi-agent_unified_inbox_content'); ?></div>

                        <a class="btn primary-btn " href="<?php echo home_url('/features/unified-multi-agent-inbox/'); ?>" target="_blank"><span>Learn More</span></a>
                    </div>
                    <div class="col-img">
                        <img src="<?php echo the_field('multi-agent_unified_inbox_image'); ?>"> </div>
                </div>
            </div>
        </div>
        <div class="package">
            <div class="wrapper">
            <div class="card-left">
                <div class="col-content">
                    <span class="blue-text">Make More Money </span>
                    <h1 class="chat-box-heading">WhatsApp mPay</h1>
                    <div><?php echo the_field('whatsapp_mpay_content'); ?></div>

                    <a class="btn primary-btn" href="<?php echo home_url('/features/whatsapp-mpay/'); ?>" target="_blank"><span>Learn More</span></a>
                </div>
                <div class="col-img">
                    <img src="<?php echo the_field('whatsapp_mpay_image'); ?>"> </div>
            </div>
            </div>
        </div>
        <div class="package">
            <div class="wrapper">
            <div class="card-left">
                <div class="col-content">
                    <span class="blue-text">Reach Out</span>
                    <h1 class="chat-box-heading">WhatsApp Bulk Sender</h1>
                    <div><?php echo the_field('whatsapp_bulk_sender_content'); ?></div>

                    <a class="btn primary-btn" href="<?php echo home_url('/features/whatsapp-bulk-sender/'); ?>" target="_blank"><span>Learn More</span></a>
                </div>
                <div class="col-img">
                    <img src="<?php echo the_field('whatsapp_bulk_sender_image'); ?>"> </div>
            </div>
            </div>
        </div>
        <div class="package">
            <div class="wrapper">
            <div class="card-left">
                <div class="col-content">
                    <span class="blue-text">Broaden your client base </span>
                    <h1 class="chat-box-heading">SMS Marketing</h1>
                    <div><?php echo the_field('two-way_and_bulk_sms_content'); ?></div>

                    <a class="btn primary-btn" href="<?php echo home_url('/features/sms-marketing/'); ?>" target="_blank"><span>Learn More</span></a>
                </div>
                <div class="col-img">
                    <img src="<?php echo the_field('two-way_and_bulk_sms_image'); ?>"> </div>
            </div>
            </div>
        </div>
        <div class="package">
            <div class="wrapper">
            <div class="card-left">
                <div class="col-content">
                    <span class="blue-text">Leverage on emails</span>
                    <h1 class="chat-box-heading">Email Marketing</h1>
                    <div><?php echo the_field('email_marketing_content'); ?></div>

                    <a class="btn primary-btn" href="<?php echo home_url('/features/email-marketing/'); ?>" target="_blank"><span>Learn More</span></a>
                </div>
                <div class="col-img">
                    <img src="<?php echo the_field('email_marketing_image'); ?>"> </div>
            </div>
            </div>
        </div>
        <div class="package">
            <div class="wrapper">
            <div class="card-left">
                <div class="col-content">
                    <span class="blue-text">Segment your clients </span>
                    <h1 class="chat-box-heading">Audience Center</h1>
                    <div><?php echo the_field('audience_content'); ?></div>

<!--                     <a class="btn primary-btn blue" href="#" target="_blank"><span>Learn More</span></a> -->
                </div>
                <div class="col-img">
                    <img src="<?php echo the_field('audience_image'); ?>"> </div>
            </div>
            </div>
        </div>
</section>

<!-- end-of-chat-box -->

<!-- communication-->
<section class="communication padding-top"></section>
    <div class="wrapper">
         <div class="comm">
             <div class="tbl">
                 <div class="col left">
                    <img src="<?php echo home_url('/'); ?>wp-content/uploads/2022/03/communication.png" class="talk">
                 </div>
                 <div class="col right">
                     <h2>Keep all communications in one place </h2>
                     <p>Trusted by more than 100+ businesses. Sign up
                       for free today and simplify customer engagement.
                     </p>
                     <div class="btn-side">
                        <a target="_blank" href="https://app.axis.africa/register">
                         <button class="btn primary-btn" id="cta-start">Get Started</button>
                        </a>
                        <a href="mailto:support@axis.africa">
                         <button class="btn primary-btn request-demo" id="cta-demo">Request Demo</button>
                        </a>
                     </div>
                     <p class="set-up">Easy setup · Cancel any time. Check out <a href="https://clients.belva.co.ke/axis/terms-conditions/">Terms of Use.</a></p>

                 </div>
             </div>
         </div>
    </div>

</section>



<?php get_footer(); ?>
