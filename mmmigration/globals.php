<?php require_once( 'admin/cms.php' ); ?>

<cms:template title='Global Settings' executable='0' order='3'>

	<cms:editable name='twitter_acc' label='Twitter User Name' desc='This is the username you use to log in in your Twitter account' type='text'/>
	<cms:editable name='youtube_acc' label='Youtube User Name' desc='This is the username you use to log in in your Youtube account' type='text'/>
	<cms:editable name='facebook_acc' label='Facebook Page Name' desc='This is what appears in the URL right after * https://www.facebook.com/ *' type='text'/>
	<cms:editable name='skype_acc' label='Skype User Name' desc='This is the username you use to log in in your Skype account' type='text'/>
	<cms:editable name='linkedin_acc' label='Linked In User Name' desc='This is what appears in the URL right after * http://www.linkedin.com/company/ *' type='text'/>
    <cms:editable name='google_acc' label='Google Analytics Account Name' desc='This is the account name and number. It looks like *UA-xxxxxxxx-x*' type='text'/>
    <cms:editable name='footer' toolbar='full' label='Footer Text' desc='This is the text you want to add in the footer right underneath the main white section ' type='richtext'/>
		 
</cms:template>

<?php COUCH::invoke(); ?>

