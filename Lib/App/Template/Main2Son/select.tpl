<div class="col-xs-4">
  <div class="form-group">
    <label for="{$item.name|default:$key}" class="col-sm-3 control-label lableMain">{$item.title}:</label>
    <div class="col-sm-9">{webcontrol type='btselect' model=$item.model condition=$item.condition options=$item.options value=$item.value itemName=$item.name|default:$key emptyText=$item.emptyText}      
    </div>
  </div>
</div>