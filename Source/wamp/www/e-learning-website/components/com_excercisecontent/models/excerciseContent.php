

<?php
/**
 * Excercise Content Model for ExcerciseContent Component
 * 
 * @subpackage Components
 */

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.model' );


class excerciseContentModelexcerciseContent extends JModel
{
	function get_answer_correct($ID) 
	{
		$db =& JFactory::getDBO();
		$query = "SELECT answer_text FROM `jos_answers` WHERE `questionid` = '".$ID."' AND `answer_correct` = 1";
		$db->setQuery( $query );
		$result = $db->loadResult();
		return $result;
	} 
	
	function get_answer($ID) 
	{
		$db =& JFactory::getDBO();
		$query = "SELECT answer_text FROM `jos_answers` WHERE `questionid` = '".$ID."'";
		$db->setQuery( $query );
		$result= $db->loadResultArray();
		return $result;
	} 
	
	function getQuestion($theoryid,$num)
	{
		$db =& JFactory::getDBO();
		$query = "SELECT * FROM `jos_questions` WHERE theory_id = '".$theoryid."' ORDER BY RAND( ) LIMIT ".$num;
		$db->setQuery( $query );
		$row = $db->loadRowList();
		$i  = 0  ;
		$result = "";
				while($i < sizeof($row)){
				?>
				<script type="text/javascript">
					function ans_<?php echo($row[$i]['0']);?>()
					{
						alert("Ans for question \"<?php echo($row[$i]['5']);?>\" is : \"<?php echo($this->get_answer_correct($row[$i]['0'])) ;?>\"");				
					}
				</script>
				<?php
				$tmp = "";
				$all_ans =   $this->get_answer($row[$i]['0']);
				if(isset($all_ans))
				{
					$tmp = "<br>".($i+1).".";
					
					$tmp .=$row[$i]['5']." <a onclick=\"ans_".$row[$i]['0']."()\" ><u>Hint</u></a>";
					
					$tmp .= "<br><label>";
					
					if(isset($all_ans['0']))
					{
						$tmp .= "<input type=\"radio\" name=\"question_".$row[$i]['0']."\" value=\"A\" id=\"question_".$row[$i]['0']."_A\" />";
						$tmp .="A. ".$all_ans['0'];
						$tmp .= "</label><br><label>";
					}
					if(isset($all_ans['1']))
					{
						$tmp .= "<input type=\"radio\" name=\"question_".$row[$i]['0']."\" value=\"B\" id=\"question_".$row[$i]['0']."_B\" />";
						$tmp .="B. ".$all_ans['1'];
						$tmp .= "</label><br><label>";
					}
					if(isset($all_ans['2']))
					{
						$tmp .= "<input type=\"radio\" name=\"question_".$row[$i]['0']."\" value=\"C\" id=\"question_".$row[$i]['0']."_C\" />";
						$tmp .="C. ".$all_ans['2'];
						$tmp .= "</label><br><label>";
					}
					if(isset($all_ans['3']))
					{
						$tmp .= "<input type=\"radio\" name=\"question_".$row[$i]['0']."\" value=\"D\" id=\"question_".$row[$i]['0']."_D\" />";
						$tmp .="D. ".$all_ans['3'];
						$tmp .= "</label><br><label>";
					}
					if(isset($all_ans['4']))
					{
						$tmp .= "<input type=\"radio\" name=\"question_".$row[$i]['0']."\" value=\"A\" id=\"question_".$row[$i]['0']."_E\" />";
						$tmp .="E. ".$all_ans['4'];
						$tmp .= "</label><br><label>";
					}
					if(isset($all_ans['5']))
					{
						$tmp .= "<input type=\"radio\" name=\"question_".$row[$i]['0']."\" value=\"A\" id=\"question_".$row[$i]['0']."_F\" />";
						$tmp .="F. ".$all_ans['5'];
						$tmp .= "</label><br><label>";
					}
					
				
					
					$tmp .="<br><input name=\"question_".$row[$i]['0']."\" type=\"hidden\" value=\"".$this->get_answer_correct($row[$i]['0'])."\" />";			
					
					$result = $result ."<br>".$tmp;	
				}
				$i++;
		}
		if ($i ==0)
			echo "Bài lý thuyết này chưa có câu hỏi nào";
		$i  =  0;
		return $result;
		
	}
	
	 function get_subject_name() 
	{
		$db =& JFactory::getDBO();
		$query = "SELECT subject_name FROM `jos_subjects`";
		$db->setQuery( $query );
		$result = $db->loadResultArray();
		return $result;
	} 
	
	function get_subject_ID($subject) 
	{
	
		$db =& JFactory::getDBO();
		$query = "SELECT  subjectid FROM `jos_subjects` where `subject_name` = \"".$subject."\"";
		$db->setQuery( $query );
		$result = $db->loadResult();
		return $result;
		
	} 
	
	function get_chapter_name($subject_id)
	{
		
		$db =& JFactory::getDBO();
		$query = "SELECT DISTINCT chapter_name FROM #__theories WHERE subjectid = " . $subject_id;
		$db->setQuery( $query );
		$chapter_name= $db->loadResultArray();
		return $chapter_name;
	}
	
	function get_theory_name($chapter_name)
	{
		
		$db =& JFactory::getDBO();
		$query = "SELECT theory_name FROM #__theories WHERE chapter_name = \"" . $chapter_name . "\"";
		$db->setQuery( $query );
		$theory_name= $db->loadResultArray();
		return $theory_name;
	
	}
	
	function get_theory_id($theory_name)
	{
		
		$db =& JFactory::getDBO();
		$query = "SELECT theory_id FROM #__theories WHERE theory_name = \"" . $theory_name . "\"";
		$db->setQuery( $query );
		$theory_id= $db->loadResult();
		return $theory_id;
	
	}
	
	
}


?>