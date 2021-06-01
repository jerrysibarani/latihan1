<?php include 'body/header.php'; ?>
<?php include 'body/nav.php'; ?>
<!-- 
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/
jquery.dataTables.min.js"></script> -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/datatables.min.css') ?>"/>
<script type="text/javascript" src="<?php echo base_url('assets/datatables.min.js') ?>"></script>


<!-- <script type="text/javascript" class="init">
    
    $(document).ready(function() {
        $('#example').DataTable();
    } );

</script> -->



<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Item Code</th>
                <th>Item Name</th>
                <th>Price</th>
                <th>Stock</th>     
                <th>Action</th>             
            </tr>
        </thead>
        <tbody>       
            <?php foreach ($item as $one_item): ?>       
            <tr>
                <td><?php echo $one_item->id ?></td>
                <td><?php echo $one_item->item_code ?></td>
                <td><?php echo $one_item->item_name ?></td>
                <td><?php echo $one_item->price ?></td>
                <td><?php echo $one_item->stock ?></td>
                <td><a href="<?= site_url('Item_c/edit_view/'.$one_item->id) ?>">
                    <i class="icon-wrench"></i> Edit |
                    <a href="<?= site_url('Item_c/delete/'.$one_item->id) ?>" onclick="return confirm('Are you sure want to delete item record (<?php echo $one_item->item_name; ?>) with id = <?php echo $one_item->id; ?> ?')"><i class="icon-trash"></i> Delete</a></td>
            </tr>
            <?php endforeach; ?>

        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Item Code</th>
                <th>Item Name</th>
                <th>Price</th>
                <th>Stock</th>     
                <th>Action</th>      
            </tr>
        </tfoot>
    </table>
<strong><h4><a href="<?php echo base_url('index.php/Item_c/add_view/') ?>" <i class="icon-wrench"></i> Add New </h4></strong>



    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dataTables.min.css') ?>">
 
    <script>

/* Results in:
    <div class="wrapper">
      {filter}
      {length}
      {information}
      {pagination}
      {table}
    </div>
*/
    
$(document).ready(function() {
    var printCounter = 0;
 
    // Append a caption to the table before the DataTables initialisation
    $('#example').append('<caption style="caption-side: bottom"> </caption>');
 
    $('#example').DataTable( {
        dom: 'lBfrtip', //lfrtip // Showing Rows
        lengthMenu: [
            [ 5,10, 25, 50, -1 ],
            [ '5 rows','10 rows', '25 rows', '50 rows', 'Show all' ]
        ],
         buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print','colvis'
        ]
        
//        buttons: [
//            'copy',
//            {
//                extend: 'excel',
//                messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
//            },
//            
//            {
//                extend: 'csv',
//                messageBottom: null
//            },            
//            {
//                extend: 'print',
//                messageTop: function () {
//                    printCounter++;
// 
//                    if ( printCounter === 1 ) {
//                        return 'This is the first time you have printed this document.';
//                    }
//                    else {
//                        return 'You have printed this document '+printCounter+' times';
//                    }
//                },
//                messageBottom: null
//            },
//          
//            'colvis'
//        ]
    } );
} );

</script>

<?php include 'body/footer.php'; ?>