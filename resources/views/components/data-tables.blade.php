<table class="w-full divide-y bg-white rounded-xl mx-auto h-fit row-span-6 normal-case">
    <tbody class="bg-white divide-y divide-gray-200 rounded-xl">
        @foreach ($medicos as $medico)
        <tr class="rounded-xl">
            <td class="w-8/12 px-6 py-4 whitespace-no-wrap">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-16 w-16 object-cover rounded-full"
                            src="/imgs/ensayos-clinicos/avatars/{{$medico['avatar']}}" alt="">
                    </div>
                    <div class="ml-4">
                        <div class="leading-5 font-medium text-gray-900">
                            {{$medico['nombre']}}
                        </div>
                    </div>
                </div>
            </td>
            <td class="px-6 w-4/12 py-4 whitespace-no-wrap">
                <span class="px-2 inline-flex hidden lg:block text-xs leading-5 font-semibold rounded-full uppercase w-max text-center" style="background: #E6F5ED; color:#304634">
                    {{$medico['especialidad']}}
                </span>
            </td>
        </tr>
        @endforeach
        @if (isset($subs))
        <th class="py-2 px-6">Sub Investigadores:</th>
            @foreach ($subs as $sub)
            <tr class="w-full bg-white">
                <td class="w-full px-10 bg-white py-2 whitespace-no-wrap">
                    <p>{{$sub['nombre']}}</p>
                </td>
                <td class="px-6 w-4/12 py-4 whitespace-no-wrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold hidden lg:block rounded-full uppercase" style="background: #E6F5ED; color:#304634">
                        {{$sub['especialidad']}}
                    </span>
                </td>
            </tr> 
            @endforeach
        @endif
    </tbody>
</table>