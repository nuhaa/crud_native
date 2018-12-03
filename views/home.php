<div class="table-responsive">
    <table class="table">

        <thead>
            <tr>
                <th class="font-weight-bold dark-grey-text">#!</th>
                <th class="font-weight-bold dark-grey-text">Nama</th>
                <th class="font-weight-bold dark-grey-text">Username</th>
                <th class="font-weight-bold dark-grey-text">Password</th>
                <th class="font-weight-bold dark-grey-text" colspan="2"><center>Action</center></th>
            </tr>
        </thead>
        <tbody>
            <?php
                $no = 1;
                $query = mysqli_query($jembatan,"select * from crud_native order by id DESC");
                while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['uname'] ?></td>
                    <td><?= $row['password'] ?></td>
                    <td>
                        <a href="?crud_native=proses&status=edit&id=<?= $row['id'] ?>" style="float: right;"><span class="fa fa-edit"></span> Edit</a>
                    </td>
                    <td> 
                        <a href="?crud_native=action&status=delete&id=<?= $row['id'] ?>" style="float: left;"><span class="fa fa-remove"></span> Hapus</a>
                    </td>
                </tr>
                <?php
                }
            ?>
        </tbody>
    </table>
</div>