<?php /* Smarty version 2.6.25-dev, created on 2015-10-22 19:02:13
         compiled from table_row_organization.tpl.html */ ?>
<tr class="warning" id="<?php echo $this->_tpl_vars['ad_in_table']->getId(); ?>
">
    <td><?php echo $this->_tpl_vars['ad_in_table']->getTitle(); ?>
</td>
    <td><a class="btn btn-success btn-xs glyphicon glyphicon-search " title="Показать объявление" href="?id=<?php echo $this->_tpl_vars['ad_in_table']->getId(); ?>
&mode=show"></a></td>
    <td><?php echo $this->_tpl_vars['ad_in_table']->getSellerName(); ?>
</td>
    <td><?php echo $this->_tpl_vars['ad_in_table']->getPrice(); ?>
</td>
    <td><a class="btn btn-danger btn-xs glyphicon glyphicon-remove" title="Удалить объявление" href="?id=<?php echo $this->_tpl_vars['ad_in_table']->getId(); ?>
&mode=delete"></a></td>
</tr>