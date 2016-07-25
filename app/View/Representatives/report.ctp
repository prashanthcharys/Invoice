<div class="representatives index">
    <h2><?php echo __('Representatives'); ?></h2>
    <table cellpadding="0" cellspacing="0">

       <?php if($data['type'] == 'day') { ?>
        <thead>
            <tr>
                <td>Date</td>
                <td>Total Sales</td>
                <td>Total Sales Value</td>
            </tr>
        </thead>
        <tbody>
	<?php foreach ($data['data'] as $record): ?>
            <tr>
                <td><?php echo $record[0]['filter']; ?></td>
                <td><?php echo $record[0]['count']; ?></td>
                <td><?php echo $record[0]['total']; ?></td>
            </tr>
<?php endforeach; ?>
        </tbody>

       <?php } ?>

         <?php if($data['type'] == 'month') { ?>
        <thead>
            <tr>
                <td>Date</td>
                <td>Total Sales</td>
                <td>Total Sales Value</td>
            </tr>
        </thead>
        <tbody>
	<?php foreach ($data['data']  as $record): ?>

            <?php 
            switch ($record[0]['filter'])
            {
                case 1:
                {
                    $month = 'Jan';
                    break;
                }
                case 2:
                {
                    $month = 'Feb';
                    break;
                }
                case 3:
                {
                    $month = 'Mar';
                    break;
                }
                case 4:
                {
                    $month = 'Apr';
                    break;
                }
                case 5:
                {
                    $month = 'May';
                    break;
                }
                case 6:
                {
                    $month = 'Jun';
                    break;
                }
                case 7:
                {
                    $month = 'Jul';
                    break;
                }
                case 8:
                {
                    $month = 'Aug';
                    break;
                }
                case 9:
                {
                    $month = 'Sep';
                    break;
                }
                case 10:
                {
                    $month = 'Oct';
                    break;
                }
                case 11:
                {
                    $month = 'Nov';
                    break;
                }
                case 12:
                {
                    $month = 'Dec';
                    break;
                }
                
            }
            ?>

            <tr>
                <td><?php echo $month; ?></td>
                <td><?php echo $record[0]['count']; ?></td>
                <td><?php echo $record[0]['total']; ?></td>
            </tr>
<?php endforeach; ?>
        </tbody>

       <?php } ?>

         <?php if($data['type'] == 'year') { ?>
        <thead>
            <tr>
                <td>Date</td>
                <td>Total Sales</td>
                <td>Total Sales Value</td>
            </tr>
        </thead>
        <tbody>
	<?php foreach ($data['data']  as $record): ?>
            <tr>
                <td><?php echo $record[0]['filter']; ?></td>
                <td><?php echo $record[0]['count']; ?></td>
                <td><?php echo $record[0]['total']; ?></td>
            </tr>
<?php endforeach; ?>
        </tbody>

       <?php } ?>


    </table>
