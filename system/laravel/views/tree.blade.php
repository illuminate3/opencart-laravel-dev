<li class="jstree-open" data-jstree='{"icon":"glyphicon glyphicon-leaf"}'>{{ $descendant->customer->customer_id }}&nbsp;<span class="pv-customer">{{ $descendant->customer->firstname }}&nbsp;{{ $descendant->customer->lastname }}&nbsp;</span><span class="pv-personal">個人PV:{{ $descendant->customer->pv }}&nbsp;</span><span class="pv-grouply">個人組織:{{ $descendant->customer->total_pv }}</span>