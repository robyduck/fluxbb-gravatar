##
##        Mod title:  Gravatar for FluxBB
##
##      Mod version:  0.1.2
##  Works on FluxBB:  1.4
##     Release date:  2010-07-24
##           Author:  Frank Smit (FSX) (frank/fluxbb/org)
##
##      Description:  This mod will adds support for Gravatars to the forum.
##                    A user can enable his Gravatar by going to the "Personality"
##                    of his profile and click "Use Gravatar". And it can be disabled
##                    by clicking on "Disable Gravatar". The default avatar maximum
##                    width will be used for the width and height of the Gravatars.
##
##   Affected files:  viewtopic.php, profile.php, include/functions.php,
##                    lang/<language>/profile.php
##
##       Affects DB:  Yes, adds a new column, "use_gravatar", to <prefix>.users
##
##            Notes:  The e-mail address of the user is used to fetch the Gravatar.
##
##       DISCLAIMER:  Please note that "mods" are not officially supported by
##                    FluxBB. Installation of this modification is done at
##                    your own risk. Backup your forum database and any and
##                    all applicable files before proceeding.
##

#
#---------[ 1. UPLOAD ]--------------------------------------------------------
#

install_mod_gravatar.php to /

#
#---------[ 2. RUN ]-----------------------------------------------------------
#

install_mod_gravatar.php

#
#---------[ 3. DELETE ]--------------------------------------------------------
#

install_mod_gravatar.php

#
#---------[ 4. OPEN ]----------------------------------------------------------
#

Note: <language> is the language you use on your forum.

lang/<language>/profile.php

#
#---------[ 5. FIND (line ~60) ]-----------------------------------------------
#

'Upload avatar'				=>	'Upload avatar',
'Upload avatar legend'		=>	'Enter an avatar file to upload',
'Delete avatar'				=>	'Delete avatar',	// only for admins
'File'						=>	'File',
'Upload'					=>	'Upload',	// submit button

#
#---------[ 6. AFTER, ADD ]----------------------------------------------------
#

'Gravatar info'             =>  ' You can also use Gravatar to provide a forum avatar and can be enabled by clicking <strong>Use Gravatar</strong>. You need to be registered at <a href="http://en.gravatar.com/">Gravatar</a> for this feature.',
'Use gravatar'              =>  'Use Gravatar',
'Use gravatar warning'      =>  '(Warning: existing avatar will be deleted)',
'Gravatar enable redirect'  =>  'Gravatar enabled. Redirecting …',
'Gravatar disable redirect' =>  'Gravatar disabled. Redirecting …',

#
#---------[ 6. OPEN ]----------------------------------------------------------
#

include/functions.php

#
#---------[ 7. FIND (line ~497) ]-----------------------------------------------
#

//
// Outputs markup to display a user's avatar
//
function generate_avatar_markup($user_id)
{
	global $pun_config;

#
#---------[ 8. REPLACE WITH ]--------------------------------------------------
#

//
// Outputs markup to display a user's avatar
//
function generate_avatar_markup($user_id, $user_email, $use_gravatar = 0)
{
	global $pun_config;

	if ($use_gravatar == 1)
		return '<img src="http://www.gravatar.com/avatar.php?gravatar_id='.md5(strtolower($user_email)).'&amp;size='.
               $pun_config['o_avatars_width'].'" width="'.$pun_config['o_avatars_width'].'" height="'.
               $pun_config['o_avatars_width'].'" alt="" />';

#
#---------[ 9. OPEN ]----------------------------------------------------------
#

profile.php

#
#---------[ 10. FIND (line ~297) ]---------------------------------------------
#

else if ($action == 'upload_avatar' || $action == 'upload_avatar2')

#
#---------[ 11. BEFORE, ADD ]--------------------------------------------------
#

else if ($action == 'use_gravatar')
{
	if ($pun_user['id'] != $id && !$pun_user['is_admmod'])
		message($lang_common['No permission']);

	confirm_referrer('profile.php');

	delete_avatar($id);

	$db->query('UPDATE '.$db->prefix.'users SET use_gravatar=1 WHERE id='.$id)
    	or error('Unable to enable gravatar', __FILE__, __LINE__, $db->error());

	redirect('profile.php?section=personality&amp;id='.$id, $lang_profile['Gravatar enable redirect']);
}

else if ($action == 'disable_gravatar')
{
	if ($pun_user['id'] != $id && !$pun_user['is_admmod'])
		message($lang_common['No permission']);

	confirm_referrer('profile.php');

	$db->query('UPDATE '.$db->prefix.'users SET use_gravatar=0 WHERE id='.$id)
    	or error('Unable to disable gravatar', __FILE__, __LINE__, $db->error());

	redirect('profile.php?section=personality&amp;id='.$id, $lang_profile['Gravatar disable redirect']);
}

#
#---------[ 12. FIND (line ~408) ]---------------------------------------------
#

			// Delete any old avatars and put the new one in place
			delete_avatar($id);
			@rename($pun_config['o_avatars_dir'].'/'.$id.'.tmp', $pun_config['o_avatars_dir'].'/'.$id.$extension);
			@chmod($pun_config['o_avatars_dir'].'/'.$id.$extension, 0644);

#
#---------[ 13. AFTER, ADD ]---------------------------------------------------
#

			// Disable gravatar
			$db->query('UPDATE '.$db->prefix.'users SET use_gravatar=0 WHERE id='.$id)
				or error('Unable to disable gravatar', __FILE__, __LINE__, $db->error());

#
#---------[ 14. FIND (line ~1419) ]--------------------------------------------
#

		$avatar_field = '<span><a href="profile.php?action=upload_avatar&amp;id='.$id.'">'.$lang_profile['Change avatar'].'</a></span>';

		$user_avatar = generate_avatar_markup($id);
		if ($user_avatar)
			$avatar_field .= ' <span><a href="profile.php?action=delete_avatar&amp;id='.$id.'">'.$lang_profile['Delete avatar'].'</a></span>';
		else
			$avatar_field = '<span><a href="profile.php?action=upload_avatar&amp;id='.$id.'">'.$lang_profile['Upload avatar'].'</a></span>';

#
#---------[ 15. REPLACE WITH ]-------------------------------------------------
#

		$avatar_field = '<span><a href="profile.php?action=upload_avatar&amp;id='.$id.'">'.$lang_profile['Change avatar'].'</a></span>';
		$gravatar_field = '';

		if ($pun_user['use_gravatar'] != 1)
			$gravatar_field = ' <span><a href="profile.php?action=use_gravatar&amp;id='.$id.'">'.$lang_profile['Use gravatar'].'</a> '.$lang_profile['Use gravatar warning'].'<span>';

		$user_avatar = generate_avatar_markup($id, $pun_user['email'], $pun_user['use_gravatar']);
		if ($user_avatar)
		{
			if ($pun_user['use_gravatar'] == 1)
				$avatar_field .= ' <span><a href="profile.php?action=disable_gravatar&amp;id='.$id.'">'.$lang_profile['Delete avatar'].'</a></span>';
			else
				$avatar_field .= ' <span><a href="profile.php?action=delete_avatar&amp;id='.$id.'">'.$lang_profile['Delete avatar'].'</a></span>';
		}
		else
			$avatar_field = '<span><a href="profile.php?action=upload_avatar&amp;id='.$id.'">'.$lang_profile['Upload avatar'].'</a></span>'.$gravatar_field;

#
#---------[ 16. FIND (line ~1459) ]--------------------------------------------
#

<?php endif; ?>							<p><?php echo $lang_profile['Avatar info'] ?></p>

#
#---------[ 17. REPLACE WITH ]-------------------------------------------------
#

<?php endif; ?>							<p><?php echo $lang_profile['Avatar info'].$lang_profile['Gravatar info'] ?></p>

#
#---------[ 18. OPEN ]---------------------------------------------------------
#

viewtopic.php

#
#---------[ 19. FIND (line ~207) ]---------------------------------------------
#

// Retrieve the posts (and their respective poster/online status)
$result = $db->query('SELECT u.email, u.title, u.url, u.location, u.signature, u.email_setting, u.num_posts, u.registered, u.admin_note, p.id, p.poster AS username, p.poster_id, p.poster_ip, p.poster_email, p.message, p.hide_smilies, p.posted, p.edited, p.edited_by, g.g_id, g.g_user_title, o.user_id AS is_online FROM '.$db->prefix.'posts AS p INNER JOIN '.$db->prefix.'users AS u ON u.id=p.poster_id INNER JOIN '.$db->prefix.'groups AS g ON g.g_id=u.group_id LEFT JOIN '.$db->prefix.'online AS o ON (o.user_id=u.id AND o.user_id!=1 AND o.idle=0) WHERE p.id IN ('.implode(',', $post_ids).') ORDER BY p.id', true) or error('Unable to fetch post info', __FILE__, __LINE__, $db->error());

#
#---------[ 20. REPLACE WITH ]-------------------------------------------------
#

Note: only u.use_gravatar has been added right after the SELECT.

// Retrieve the posts (and their respective poster/online status)
$result = $db->query('SELECT u.use_gravatar, u.email, u.title, u.url, u.location, u.signature, u.email_setting, u.num_posts, u.registered, u.admin_note, p.id, p.poster AS username, p.poster_id, p.poster_ip, p.poster_email, p.message, p.hide_smilies, p.posted, p.edited, p.edited_by, g.g_id, g.g_user_title, o.user_id AS is_online FROM '.$db->prefix.'posts AS p INNER JOIN '.$db->prefix.'users AS u ON u.id=p.poster_id INNER JOIN '.$db->prefix.'groups AS g ON g.g_id=u.group_id LEFT JOIN '.$db->prefix.'online AS o ON (o.user_id=u.id AND o.user_id!=1 AND o.idle=0) WHERE p.id IN ('.implode(',', $post_ids).') ORDER BY p.id', true) or error('Unable to fetch post info', __FILE__, __LINE__, $db->error());

#
#---------[ 21. FIND (line ~240) ]---------------------------------------------
#

				$user_avatar = $user_avatar_cache[$cur_post['poster_id']] = generate_avatar_markup($cur_post['poster_id']);

#
#---------[ 22. REPLACE WITH ]-------------------------------------------------
#

				$user_avatar = $user_avatar_cache[$cur_post['poster_id']] = generate_avatar_markup($cur_post['poster_id'], $cur_post['email'], $cur_post['use_gravatar']);

#
#---------[ 23. SAVE/UPLOAD & USE ]--------------------------------------------
#

See the notes at the beginning of this file.
