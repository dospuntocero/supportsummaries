<?php
/**
 * @package sapphire
 * @subpackage tests
 */
class GroupCsvBulkLoaderTest extends SapphireTest {
	static $fixture_file = 'sapphire/tests/security/GroupCsvBulkLoaderTest.yml';
	
	function testNewImport() {
		$loader = new GroupCsvBulkLoader();
		$results = $loader->load('sapphire/tests/security/GroupCsvBulkLoaderTest.csv');
		$created = $results->Created()->toArray();
		$this->assertEquals(count($created), 2);
		$this->assertEquals($created[0]->Code, 'newgroup1');
		$this->assertEquals($created[0]->ParentID, 0);
		$this->assertEquals($created[1]->Code, 'newchildgroup1');
		$this->assertEquals($created[1]->ParentID, $created[0]->ID);
	}
	
	function testOverwriteExistingImport() {
		$existinggroup = new Group();
		$existinggroup->Title = 'Old Group Title';
		$existinggroup->Code = 'newgroup1';
		$existinggroup->write();
		
		$loader = new GroupCsvBulkLoader();
		$results = $loader->load('sapphire/tests/security/GroupCsvBulkLoaderTest.csv');
		
		$created = $results->Created()->toArray();
		$this->assertEquals(count($created), 1);
		$this->assertEquals($created[0]->Code, 'newchildgroup1');
		
		$updated = $results->Updated()->toArray();
		$this->assertEquals(count($updated), 1);
		$this->assertEquals($updated[0]->Code, 'newgroup1');
		$this->assertEquals($updated[0]->Title, 'New Group 1');
	}
	
	function testImportPermissions() {
		$loader = new GroupCsvBulkLoader();
		$results = $loader->load('sapphire/tests/security/GroupCsvBulkLoaderTest_withExisting.csv');
		
		$created = $results->Created()->toArray();
		$this->assertEquals(count($created), 1);
		$this->assertEquals($created[0]->Code, 'newgroup1');
		$this->assertEquals($created[0]->Permissions()->column('Code'), array('CODE1'));
		
		$updated = $results->Updated()->toArray();
		$this->assertEquals(count($updated), 1);
		$this->assertEquals($updated[0]->Code, 'existinggroup');
		$array1=$updated[0]->Permissions()->column('Code');
		$array2=array('CODE1', 'CODE2');
		sort($array1);
		sort($array2);
		$this->assertEquals($array1, $array2);
	}
	
}