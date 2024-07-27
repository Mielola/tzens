<a {{$attributes}}
class="{{$active ? 'rounded-md bg-gray-900 text-white' :
'text-gray-300 hover:bg-gray-700 hover:text-white'}}  px-3 py-2 text-sm font-medium "
aria-current="{{request() -> is('/') ? 'page' : false}}">{{$slot}}</a>
