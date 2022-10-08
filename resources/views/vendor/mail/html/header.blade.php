<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="http://localhost/images/title.png" class="h-20 fill-current logo" alt="Laravel Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
