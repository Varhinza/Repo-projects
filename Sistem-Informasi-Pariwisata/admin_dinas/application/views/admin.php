<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
            <tr>
                <th>No</th>
                <th>Nama Wisata</th>
                <th>Jenis Wisata</th>
                <th>Lokasi</th>
                <th>Aktivtas</th>
            </tr>
            <?php 
            $no=1;
            foreach($data as $row){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->nm_wst; ?></td>
                <td><?php echo $row->jns_wst; ?></td>
                <td><?php echo $row->lokasi; ?></td>
                <td><?php echo $row->aktivitas; ?></td>
            </tr>
            <?php } ?>
        </table>
        <a href="admin/input_wisata">Input Wisata</a>
</body>
</html>