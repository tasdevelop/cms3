<script type="text/javascript">
     $(function(){
        var dgRelasi = $("#dgRelasi").datagrid(
            {
                remoteFilter:true,
                pagination:true,
                rownumbers:true,
                fitColumns:true,
                singleSelect:true,
                remoteSort:true,
                clientPaging: false,
                url:"<?= base_url() ?>relasi/grid2/<?= $relationno ?>",
                method:'get'
            });
        var pagerRelasi = dgRelasi.datagrid('getPager');    // get the pager of datagrid
        pagerRelasi.pagination({
            buttons:[{
                iconCls:'icon-add',
                handler:function(){
                    save("add",null,"formjemaat","<?php echo @$statusid ?>");
                }
            },{
                iconCls:'icon-edit',
                handler:function(){
                   var recno = $('#dgRelasi').datagrid('getSelected');

                    if(recno!=null){
                        save("edit",recno.member_key,"formjemaat",null);
                    }else{
                         $.messager.alert('Peringatan','Pilih salah satu baris!','warning');
                    }
                }
            },{
                iconCls:'icon-remove',
                handler:function(){
                    var recno = $('#dgRelasi').datagrid('getSelected');
                    if(recno.member_key!=null){
                        del("del",recno.member_key,"formjemaat");
                    }else{
                         $.messager.alert('Peringatan','Pilih salah satu baris!','warning');
                    }
                }
            },{
                text:'Export Excel',
                iconCls:'icon-print',
                handler:function(){
                   excelrelasi();
                }
            }]
        });
        dgRelasi.datagrid('enableFilter', [{
            field:'member_key',
            type:'label',
            hidden:true
        },{
            field:'aksi',
            type:'label'
        },{
            field:'blood_key',
            type:'combobox',
            options:{
                    panelHeight:'auto',
                    data:[<?= $blood ?>],
                    onChange:function(value){
                        if (value == ''){
                            dgRelasi.datagrid('removeFilterRule', 'blood_key');
                        } else {
                            dgRelasi.datagrid('addFilterRule', {
                                field: 'blood_key',
                                op: 'equal',
                                value: value
                            });
                        }
                        dgRelasi.datagrid('doFilter');
                    }
                }
        }

        ]);
    });
    function excelrelasi(){
        window.open("<?php echo base_url(); ?>relasi/excel");
    }
</script>
<table id="dgRelasi" title="Relasi" class="easyui-datagrid" style="width:100%;height:250px"
               >
    <thead>
         <tr>
            <th field="aksi" width="10%">Aksi</th>
            <th hidden="true" field="member_key" width="10%"></th>
            <th sortable="true" field="photofile" width="10%">photo</th>
            <th sortable="true" field="statusid" width="10%">statusid</th>
            <th sortable="true" field="grp_pi" width="10%">grp_pi</th>
            <th sortable="true" field="relationno" width="10%">relationno</th>
            <th sortable="true" field="memberno" width="10%">memberno</th>
            <th sortable="true" field="membername" width="10%">membername</th>
            <th sortable="true" field="chinesename" width="10%">chinesename</th>
            <th sortable="true" field="phoneticname" width="10%">phoneticname</th>
            <th sortable="true" field="aliasname" width="10%">aliasname</th>
            <th sortable="true" field="tel_h" width="10%">tel_h</th>
            <th sortable="true" field="tel_o" width="10%">tel_o</th>
            <th sortable="true" field="handphone" width="10%">handphone</th>
            <th sortable="true" field="address" width="10%">address</th>
            <th sortable="true" field="add2" width="10%">add2</th>
            <th sortable="true" field="city" width="10%">city</th>
            <th sortable="true" field="gender_key" width="10%">genderid</th>
            <th sortable="true" field="pstatus_key" width="10%">pstatusid</th>
            <th sortable="true" field="pob" width="10%">pob</th>
            <th sortable="true" field="dob" width="10%">dob</th>
            <th sortable="true" field="umur" width="10%">umur</th>
            <th sortable="true" field="blood_key" width="10%">bloodid</th>
            <th sortable="true" field="kebaktian_key" width="10%">kebaktianid</th>
            <th sortable="true" field="persekutuan_key" width="10%">persekutuanid</th>
            <th sortable="true" field="rayon_key" width="10%">rayonid</th>
            <th sortable="true" field="serving" width="10%">serving</th>
            <th sortable="true" field="fax" width="10%">fax</th>
            <th sortable="true" field="email" width="10%">email</th>
            <th sortable="true" field="website" width="10%">website</th>
            <th sortable="true" field="baptismdocno" width="10%">baptismdocno</th>
            <th sortable="true" field="baptis" width="10%">baptis</th>
            <th sortable="true" field="baptismdate" width="10%">baptismdate</th>
            <th sortable="true" field="remark" width="10%">remark</th>
            <th sortable="true" field="relation" width="10%">relation</th>
            <th sortable="true" field="oldgrp" width="10%">oldgrp</th>
            <th sortable="true" field="kebaktian" width="10%">kebaktian</th>
            <th sortable="true" field="jlhbesuk" width="10%">jlhbesuk</th>
            <th sortable="true" field="tglbesukterakhir" width="10%">tglbesukterakhir</th>
            <th sortable="true" field="pembesukdari" width="10%">pembesukdari</th>
            <th sortable="true" field="remark" width="10%">remark</th>
            <th sortable="true" field="modifiedby" width="10%">modifiedby</th>
            <th sortable="true" field="modifiedon" width="10%">modifiedon</th>
            <!-- <?php foreach($listTable as $t){
             ?>
            <th field="<?= $t ?>" width="10%" sortable="true"><?= $t ?></th>
            <?php } ?> -->
        </tr>
    </thead>
</table>