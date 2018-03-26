<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
<li><a href="{{ backpack_url("elfinder") }}"><i class="fa fa-files-o"></i> <span>File manager</span></a></li>
<li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/backup') }}"><i class="fa fa-hdd-o"></i> <span>Backups</span></a></li>
<li><a href="{{ backpack_url('setting') }}"><i class="fa fa-cog"></i> <span>Settings</span></a></li>

<li class="header">Estimate</li>
<li><a href="{{ backpack_url('guillotine') }}"><i class="fa fa-cog"></i> <span>Guillotines</span></a></li>
<li><a href="{{ backpack_url('impose_type') }}"><i class="fa fa-cog"></i> <span>Impose Types</span></a></li>
<li><a href="{{ backpack_url('imposition') }}"><i class="fa fa-cog"></i> <span>Impositions</span></a></li>
<li><a href="{{ backpack_url('job_type') }}"><i class="fa fa-cog"></i> <span>Job Types</span></a></li>


<li><a href="{{ backpack_url('print_method') }}"><i class="fa fa-cog"></i> <span>Print Methods</span></a></li>
<li><a href="{{ backpack_url('press') }}"><i class="fa fa-cog"></i> <span>Presses</span></a></li>

<li><a href="{{ backpack_url('size') }}"><i class="fa fa-cog"></i> <span>Sizes</span></a></li>

