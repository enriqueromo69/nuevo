<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>



<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>



</div><!-- form -->

<?php endif; ?>


<section id="contact">
        <div class="control-group">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contactos</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">                               
                            <?php echo $form->labelEx($model,'name'); ?>
							<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255,'class'=>'form-control','placeholder'=>'Name')); ?>
							<?php echo $form->error($model,'name'); ?>                                
                                
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
								<?php echo $form->labelEx($model,'email'); ?>
								<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255,'class'=>'form-control','placeholder'=>'Email Address')); ?>
								<?php echo $form->error($model,'email'); ?>

                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
								<?php echo $form->labelEx($model,'subject'); ?>
								<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>255,'class'=>'form-control','placeholder'=>'subject')); ?>
								<?php echo $form->error($model,'subject'); ?>
                               
                            </div>
                        </div>

                         <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
								<?php echo $form->labelEx($model,'body'); ?>
								<?php echo $form->textArea($model,'body',array('size'=>60,'maxlength'=>255,'class'=>'form-control','placeholder'=>'body')); ?>
								<?php echo $form->error($model,'body'); ?>

                            </div>
                        </div>

                        <?php if(CCaptcha::checkRequirements()): ?>
 						
 						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
								<?php echo $form->labelEx($model,'verifyCode'); ?>
								<div>
								<?php $this->widget('CCaptcha'); ?>
								<?php echo $form->textField($model,'verifyCode',array('size'=>60,'maxlength'=>255,'class'=>'form-control')); ?>
								</div>
								<div class="hint">Please enter the letters as they are shown in the image above.
								<br/>Letters are not case-sensitive.</div>
								<?php echo $form->error($model,'verifyCode'); ?>

                            </div>
                        </div>
                        <?php endif; ?>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                
								<?php echo CHtml::submitButton('Submit',array('class'=>'btn btn-success btn-lg')); ?>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            //
        </div>
    </section>

    <?php $this->endWidget(); ?>