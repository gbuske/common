<?php defined('SYSPATH') or die('No direct script access.');?>


<div class="page-header">
    <a class="btn btn-primary pull-right ajax-load" href="<?=Route::url('oc-panel',array('controller'=>'tools','action'=>'optimize'))?>?force=1" title="<?=__('Optimize')?>">
        <?=__('Optimize')?>
    </a>
    <h1><?=__('Optimize Database')?></h1>
</div>

<p>
    <?=__('Database space')?> <?=round($total_space,2)?> KB<br>
    <?=__('Space to optimize')?> <?=round($total_gain,2)?> KB
</p>

<div class="panel panel-default">
    <div class="panel-body">
        <table class="table table-striped">
            <thead>
                 <tr>
                    <th><?=__('Table')?></th>
                    <th><?=__('Rows')?></th>
                    <th><?=__('Size')?> KB</th>
                    <th><?=__('Save size')?> KB</th>
                </tr>
            </thead>
        
            <tbody>
                <?foreach ($tables as $table):?>
                <tr class="<?=($table['gain']>0)?'warning':''?>">
                    <td><?=$table['name']?></td>
                    <td><?=$table['rows']?></td>
                    <td><?=$table['space']?></td>
                    <td><?=$table['gain']?></td>
                </tr>
                <?endforeach?>
            </tbody>
        </table>
    </div>
</div>