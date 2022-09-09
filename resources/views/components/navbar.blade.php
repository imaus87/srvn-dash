<div class="shadow-b bg-white px-6 font-medium shadow-md">
    <div class="mx-auto max-w-7xl">
        <div class="flex h-8 w-full items-center justify-between text-xs">
            <div class="flex w-full items-center">
                <a href="{{ route('register') }}"
                   class="font-semibold text-[#ff460d]">
                    Wordt lid voor €25 per jaar!
                </a>
                <ul class="flex text-stone-500">
                    <li class="ml-6 flex items-center">
                        <x-heroicon-s-check class="mr-1 h-4 text-[#ff460d]" />
                        24/7 raceservers
                    </li>
                    <li class="ml-6 flex items-center">
                        <x-heroicon-s-check class="mr-1 h-4 text-[#ff460d]" />
                        Kampioenschappen
                    </li>
                    <li class="ml-6 flex items-center">
                        <x-heroicon-s-check class="mr-1 h-4 text-[#ff460d]" />
                        Evenementen
                    </li>
                    <li class="ml-6 flex items-center">
                        <x-heroicon-s-check class="mr-1 h-4 text-[#ff460d]" />
                        Eigen livery
                    </li>
                    <li class="ml-6 flex items-center">
                        <x-heroicon-s-check class="mr-1 h-4 text-[#ff460d]" />
                        2x ALV
                    </li>
                </ul>
            </div>
            <div>
                <ul class="flex w-full items-center">
                    <li class="ml-6 hover:underline">
                        <a href="https://srvn.liveracers.com/League"
                           target="_blank">
                            Liveracers
                        </a>
                    </li>
                    <li class="ml-6 hover:underline">
                        <a href="https://forum.srvn.nl/"
                           target="_blank">
                            Forum
                        </a>
                    </li>
                    <li class="ml-6 hover:underline">
                        <a href="https://discord.com/invite/U5rs68Q9CQ"
                           target="_blank">
                            Discord
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="flex h-24 w-full items-center border-t border-stone-200">
            <a href="{{ route('home') }}">
                <x-srvn-stone class="h-8 pr-3" />
            </a>
            <div class="flex h-full w-full justify-between">
                <ul class="flex h-full">
                    <li class="h-full">
                        <a class="flex h-full w-full items-center px-3 hover:text-[#ff460d]"
                           href="{{ route('kalender') }}">
                            <span>Kalender</span>
                        </a>
                    </li>
                    <li class="h-full">
                        <a class="flex h-full w-full items-center px-3 hover:text-[#ff460d]"
                           href="{{ route('klassement') }}">
                            <span>Klassement</span>
                        </a>
                    </li>
                    <li class="h-full">
                        <a class="flex h-full w-full items-center px-3 hover:text-[#ff460d]"
                           href="{{ route('rijders') }}">
                            <span>Rijders</span>
                        </a>
                    </li>
                    <li class="h-full">
                        <a class="flex h-full w-full items-center px-3 hover:text-[#ff460d]"
                           href="{{ route('teams') }}">
                            <span>Teams</span>
                        </a>
                    </li>
                </ul>
                <ul class="flex h-full items-center">
                    <li>
                        <a href="{{ route('dashboard') }}"
                           class="flex items-center justify-center space-x-1 rounded border-2 border-[#ff460d] bg-[#ff460d] px-3 py-2 font-semibold text-white hover:bg-transparent hover:text-stone-800 transition ease-in-out duration-150">
                            <x-heroicon-o-user class="h-6" />
                            <span>Mijn SRVN</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
