
<?php

$organisationDetails = array(
  10 => array(
    'name' => 'weboniseLab',
    'jobRole' => array(
      '11' => array(
        'name' => 'devloper',
        'created' => '2016-02-01',
      ),
      '12' => array(
        'name' => 'sr. developer',
        'created' => '2016-02-10',
      ),
    ),
    'cfa' => array(
      '11' => array(
        'name' => 'php',
        'created' => '2016-03-10',
      ),
      '12' => array(
        'name' => 'ruby',
        'created' => '2016-04-15',
      ),
    )
  ),
  11 => array(
    'name' => 'Hartley Lab',
    'jobRole' => array(
      '11' => array(
        'name' => 'foront end',
        'created' => '2016-03-01',
      ),
      '12' => array(
        'name' => 'design',
        'created' => '2016-03-10',
      ),
    ),
    'cfa' => array(
      '11' => array(
        'name' => 'UI',
        'created' => '2016-02-01',
      ),
      '12' => array(
        'name' => 'UX',
        'created' => '2016-01-01',
      ),
    )
  ),
  15 => array(
    'name' => 'Hartley Lab',
    'jobRole' => array(
      '11' => array(
        'name' => 'foront end',
        'created' => '2016-03-01',
      ),
      '12' => array(
        'name' => 'design',
        'created' => '2016-03-10',
      ),
    )
  )
);
getOrganizationDataCsv($organisationDetails);

function getOrganizationDataCsv($organisationDetails) {
  echo "<table>
  <tr>
    <th> Month-Year(created)</th>
    <th> Organisation Name</th>
    <th> Organisation ID</th>
    <th>CFA Name</th>
    <th>CFA ID</th>
    <th>RFA Name</th>
    <th>JR ID</th>
    <th>JR name</th>
  </tr>";
  header("Content-type: application/vnd.ms-excel");
  header("Content-Disposition: attachment; filename=foo_bar.xls");
  foreach($organisationDetails as $key => $organisationDetail) {
    foreach($organisationDetail['cfa'] as $ckey => $cfa) {
      foreach($organisationDetail['jobRole'] as $jkey => $jobRole) {
        ?>
        <tr>
          <td><?php echo $jobRole['created']; ?></td>
          <td><?php echo $organisationDetail['name']; ?></td>
          <td><?php echo $key; ?></td>
          <td><?php echo $cfa['name']; ?></td>
          <td><?php echo $ckey; ?></td>
          <td><?php echo $jkey; ?></td>
          <td><?php echo $jkey; ?></td>
          <td><?php echo $jobRole['name']; ?></td>
        </tr>
      <?php
      }
    }
  }
  echo "</table>";
}
?>
