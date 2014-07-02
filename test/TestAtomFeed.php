<?PHP
  require_once( $_SERVER['DOCUMENT_ROOT'] . "birt/test/common/atomlib.php");

  # where is the feed located?
  $url = "http://www.example.net/atom.xml";

  # create object to hold data and display output
  $atom_parser = new myAtomParser($url);

  $output = $atom_parser->getOutput();	# returns string containing HTML
  echo $output;
?>