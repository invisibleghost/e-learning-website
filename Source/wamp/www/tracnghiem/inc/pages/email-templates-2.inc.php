<?php
$g_vars['page']['location'] = array('administration', 'email_templates', 'edit_email_template');
$g_smarty->assign('g_vars', $g_vars);
displayTemplate('_header');
$f_etemplateid = (int)readGetVar('etemplateid');
$g_vars['page']['selected_section'] = 'administration';
$g_vars['page']['selected_tab'] = 'emailtemplates-2';
$g_vars['page']['menu_2_items'] = getMenu2Items($g_vars['page']['selected_section']);
writePanel2($g_vars['page']['menu_2_items']);
echo '<h2>'.$lngstr['page_header_etemplates_edit'].'</h2>';
function writeTemplateTag($i_tag) {
	echo '<a href="javascript:writeTag(\''.$i_tag.'\')">'.$i_tag.'</a>';
}
writeErrorsWarningsBar();
 
$i_rSet1 = $g_db->Execute("SELECT * FROM ".$srv_settings['table_prefix']."etemplates WHERE etemplateid=$f_etemplateid");
if(!$i_rSet1) {
	showDBError(__FILE__, 1);
} else {
	if(!$i_rSet1->EOF) {
 echo '<p><form name=etemplateForm method=post action="email-templates.php?etemplateid='.$f_etemplateid.'&action=edit">';
echo '<table cellpadding=0 cellspacing=1 border=0 width="100%">';
echo '<tr vAlign=top><td>';
echo '<table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">';
$i_rowno = 0;
writeTR2($lngstr['page_etemplates_etemplateid'], $i_rSet1->fields["etemplateid"]);
writeTR2($lngstr['page_etemplates_etemplatename'], getInputElement('etemplate_name', $i_rSet1->fields["etemplate_name"]));
writeTR2($lngstr['page_etemplates_etemplatedescription'], getTextArea('etemplate_description', $i_rSet1->fields["etemplate_description"]));
writeTR2($lngstr['page_etemplates_etemplatefrom'], getInputElement('etemplate_from', $i_rSet1->fields["etemplate_from"]));
writeTR2($lngstr['page_etemplates_etemplatesubject'], getInputElement('etemplate_subject', $i_rSet1->fields["etemplate_subject"]));
writeTR2($lngstr['page_etemplates_etemplatebody'], getTextArea('etemplate_body', $i_rSet1->fields["etemplate_body"], '', 30));
echo '</table>';
echo '</td><td>';
echo '<table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">';
echo '<tr><td class=rowhdr1>'.$lngstr['page_etemplates_template_tags'].'</td></tr>';
echo '<tr class=rowone><td>';
writeTemplateTag(ETEMPLATE_TAG_USERNAME);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_PASSWORD);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_TITLE);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_FIRST_NAME);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_LAST_NAME);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_MIDDLE_NAME);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_EMAIL);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_ADDRESS);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_CITY);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_STATE);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_ZIP);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_COUNTRY);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_PHONE);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_FAX);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_MOBILE);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_PAGER);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_IPPHONE);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_WEBPAGE);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_ICQ);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_MSN);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_AOL);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_GENDER);
echo '<br>';  
 writeTemplateTag(ETEMPLATE_TAG_USER_HUSBANDWIFE);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_CHILDREN);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_TRAINER);
echo '<br>';  
 writeTemplateTag(ETEMPLATE_TAG_USER_COMPANY);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_CPOSITION);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_DEPARTMENT);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_COFFICE);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_CADDRESS);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_CCITY);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_CSTATE);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_CZIP);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_CCOUNTRY);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_CPHONE);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_CFAX);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_CMOBILE);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_CPAGER);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_CIPPHONE);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_CWEBPAGE);
echo '<br>';  
 writeTemplateTag(ETEMPLATE_TAG_USER_USERFIELD1);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_USERFIELD2);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_USERFIELD3);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_USERFIELD4);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_USERFIELD5);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_USERFIELD6);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_USERFIELD7);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_USERFIELD8);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_USERFIELD9);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_USER_USERFIELD10);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_TEST_NAME);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_RESULT_ID);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_RESULT_DATE);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_RESULT_TIME_SPENT);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_RESULT_TIME_EXCEEDED);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_RESULT_POINTS_SCORED);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_RESULT_POINTS_POSSIBLE);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_RESULT_PERCENTS);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_RESULT_GRADE);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_RESULT_DETAILED_1);
echo '<br>';
writeTemplateTag(ETEMPLATE_TAG_RESULT_DETAILED_2);
echo '</td></tr>';
echo '</table>';
echo'</td></tr></table>'; 
 echo '<p class=center><input class=btn type=submit name=bsubmit value=" '.$lngstr['button_update'].' "> <input class=btn type=submit name=bcancel value=" '.$lngstr['button_cancel'].' "></form>';
}
$i_rSet1->Close();
}
displayTemplate('_footer');
?>
