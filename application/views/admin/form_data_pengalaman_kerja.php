<center>
    <script>
        $(function() {
                $( ".date_picker" ).datepicker({dateFormat:'yy-mm-dd'});
        });
    </script>
    <form method="post" action="<?php echo base_url()?>admin/con_data_pengalaman_kerja/op_edit/<?php echo $mode?>">
        <table width="366" border="1">
            <tr>
                <td width="150">
                    NIP
                </td>
                <td width="200">
                    <?php echo $nip?>
                    <?php echo '<input type="hidden" name="nip" id="nip" value="'.$nip.'" />'?>
                    <?php if($mode=='edit') {?>
                        <?php echo '<input type="hidden" name="id" id="id" value="'.$ID.'" />'?>
                    <?php }?>
                </td>
            </tr>
            <tr>
                <td>
                    Nama Institusi Kerja
                </td>
                <td>
                    <input type="text" name="tempat_kerja" id="tempat_kerja" value="<?php echo $tempat_kerja?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Alamat
                </td>
                <td>
                    <input type="text" name="alamat" id="alamat" value="<?php echo $alamat?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Tahun Masuk
                </td>
                <td>
                    <input type="text" name="tahun_masuk" id="tahun_masuk" value="<?php echo $tahun_masuk?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Tahun Keluar
                </td>
                <td>
                    <input type="text" name="tahun_keluar" id="tahun_keluar" value="<?php echo $tahun_keluar?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Honor
                </td>
                <td>
                    <input type="text" name="gaji_terakhir" id="gaji_terakhir" value="<?php echo $gaji_terakhir?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Jabatan
                </td>
                <td>
                    <input type="text" name="jabatan_terakhir" id="jabatan_terakhir" value="<?php echo $jabatan_terakhir?>"/>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div align="center">
                        <input type="submit" value="Submit" />
                        &nbsp;
                        <input type="reset"  value="Reset" />
                    </div>
                </td>
            </tr>
        </table>
    </form>
</center>