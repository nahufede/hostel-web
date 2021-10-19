<form action="{{route('locale',['locale'=>$lang])}}" method="POST" class="text-center">
@csrf
    <button type="submit" style="border:none;background-color:transparent" class="px-0">
    <span class="flag-icon flag-icon-{{$nation}}"></span>
    </button>
</form>
