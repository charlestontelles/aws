<?php /* Template Name: STUDENTS */
/**
 * The template for displaying all students
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>

<?php echo "STUDENTS LIST";?>
<?php
global $wpdb;
$students = $wpdb->get_results("SELECT * FROM SENAI.STUDENTS;");

echo "<br>";
echo "<table>";
foreach($students as $student)
{
  echo "<tr>";
  echo "<td>".$student->NAME."</td>";
  echo "<td>".$student->EMAIL."</td>";
  echo "<td>".$student->PHONE."</td>";
  echo "<td>".$student->COURSE."</td>";
  echo "</tr>";
}
echo "</table>";
?>

<?php get_footer();
