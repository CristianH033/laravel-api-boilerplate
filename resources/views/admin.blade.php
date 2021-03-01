<x-app-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administration') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="min-w-screen bg-gray-100 flex items-center justify-center bg-gray-100">
            <div class="max-w-7xl w-full mx-auto py-6 sm:px-6 lg:px-8">
                <div class="flex flex-col lg:flex-row w-full lg:space-x-2 space-y-2 lg:space-y-0 mb-2 lg:mb-4">

                    <a href="{{ route('telescope') }}" class="w-full lg:flex">
                        <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-purple-400">
                            <div class="flex items-center">
                                <div class="icon w-14 p-1 bg-purple-400 text-white rounded-full mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" fill="#FFFFFF">
                                        <path
                                            d="M0 40a39.87 39.87 0 0 1 11.72-28.28A40 40 0 1 1 0 40zm34 10a4 4 0 0 1-4-4v-2a2 2 0 1 0-4 0v2a4 4 0 0 1-4 4h-2a2 2 0 1 0 0 4h2a4 4 0 0 1 4 4v2a2 2 0 1 0 4 0v-2a4 4 0 0 1 4-4h2a2 2 0 1 0 0-4h-2zm24-24a6 6 0 0 1-6-6v-3a3 3 0 0 0-6 0v3a6 6 0 0 1-6 6h-3a3 3 0 0 0 0 6h3a6 6 0 0 1 6 6v3a3 3 0 0 0 6 0v-3a6 6 0 0 1 6-6h3a3 3 0 0 0 0-6h-3zm-4 36a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM21 28a3 3 0 1 0 0-6 3 3 0 0 0 0 6z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="flex flex-col justify-center">
                                    <div class="text-lg">Laravel Telescope</div>
                                    <div class="text-sm text-gray-400">{{ __("Debugging assistant.") }}</div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('horizon.index') }}" class="w-full lg:flex">
                        <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-blue-400">
                            <div class="flex items-center">
                                <div class="icon w-14 p-1 bg-blue-400 text-white rounded-full mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="#FFFFFF">
                                        <path
                                            d="M5.26176342 26.4094389C2.04147988 23.6582233 0 19.5675182 0 15c0-4.1421356 1.67893219-7.89213562 4.39339828-10.60660172C7.10786438 1.67893219 10.8578644 0 15 0c8.2842712 0 15 6.71572875 15 15 0 8.2842712-6.7157288 15-15 15-3.716753 0-7.11777662-1.3517984-9.73823658-3.5905611zM4.03811305 15.9222506C5.70084247 14.4569342 6.87195416 12.5 10 12.5c5 0 5 5 10 5 3.1280454 0 4.2991572-1.9569336 5.961887-3.4222502C25.4934253 8.43417206 20.7645408 4 15 4 8.92486775 4 4 8.92486775 4 15c0 .3105915.01287248.6181765.03811305.9222506z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="flex flex-col justify-center">
                                    <div class="text-lg">Laravel Horizon</div>
                                    <div class="text-sm text-gray-400">{{ __("Job queues.") }}</div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="{{ url('/websockets') }}" class="w-full lg:flex">
                        <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-indigo-400">
                            <div class="flex items-center">
                                <div class="icon w-14 p-2 bg-indigo-400 text-white rounded-full mr-3">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                    y="0px" viewBox="0 0 512 512" style="enable-background: new 0 0 512 512" xml:space="preserve" fill="#FFFFFF">
                                        <g>
                                            <g>
                                                <path d="M221.057,487.192c-2.28-7.996-10.554-12.627-18.519-10.338c-47.212,13.383-98.009,0.229-132.563-34.327
                                            c-34.574-34.574-47.719-85.36-34.316-132.572c2.258-7.975-2.402-16.262-10.338-18.52c-7.965-2.269-16.262,2.362-18.519,10.336
                                            c-16.377,57.643-0.3,119.709,41.96,161.97c42.241,42.239,104.295,58.325,161.957,41.97
                                            C218.695,503.453,223.326,495.157,221.057,487.192z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M154.818,421.283c-32.379-4.578-59.019-31.22-63.599-63.599c-1.181-8.161-8.741-13.9-16.967-12.74
                                            c-8.192,1.17-13.9,8.763-12.74,16.967c3.212,22.663,13.477,43.204,29.676,59.403c16.201,16.201,36.74,26.464,59.403,29.676
                                            c8.205,1.161,15.797-4.547,16.967-12.74C168.699,430.047,162.969,422.475,154.818,421.283z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M507.104,4.398c-5.863-5.864-15.352-5.864-21.215-0.001L462.42,28.869l-10.607-10.605
                                            c-3.541-3.543-8.628-5.087-13.548-4.102l-53.033,10.605c-5.934,1.192-10.576,5.832-11.766,11.766l-5.11,25.551l82.064,82.064
                                            l25.549-5.11c5.936-1.192,10.576-5.832,11.766-11.768l10.607-53.033c0.983-4.92-0.56-10.005-4.102-13.548l-10.607-10.605
                                            l23.471-24.473C512.965,19.748,512.965,10.261,507.104,4.398z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M239.681,272.823c-35.147-35.149-92.131-35.149-127.278,0l-10.607,10.605c-5.858,5.858-5.858,15.355,0,21.213
                                            l42.426,42.427l-10.605,10.605c-5.863,5.863-5.863,15.352,0,21.215c5.863,5.863,15.35,5.863,21.213,0l10.605-10.607l42.427,42.427
                                            c5.857,5.857,15.354,5.857,21.212,0l10.607-10.607C274.828,364.954,274.828,307.97,239.681,272.823z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M409.387,272.822c-5.863-5.863-15.352-5.863-21.213,0l-31.82,31.82l-21.215-21.215l63.64-63.64L292.714,113.722
                                            l-63.64,63.64l-21.213-21.213l31.82-31.82c5.863-5.863,5.863-15.352,0-21.213l-31.82-31.82L101.795,177.362l31.82,31.82
                                            c5.863,5.863,15.35,5.863,21.213,0l31.82-31.82l21.213,21.213l-10.605,10.607c1.558,4.77,1.826,5.587,3.386,10.356
                                            c22.09,4.497,43.149,14.965,60.253,32.069c17.106,17.106,27.574,38.165,32.071,60.255c4.77,1.558,5.587,1.827,10.356,3.386
                                            l10.605-10.607l21.215,21.215l-31.82,31.818c-5.863,5.863-5.863,15.352,0,21.215l31.82,31.82L441.207,304.64L409.387,272.822z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M494.24,357.673l-31.82-31.818L356.354,431.921l31.82,31.82c5.861,5.861,15.35,5.861,21.213,0l84.853-84.853
                                            C500.103,373.025,500.103,363.536,494.24,357.673z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M154.828,18.263c-5.863-5.863-15.35-5.863-21.213,0l-84.853,84.853c-5.863,5.861-5.863,15.35,0,21.213l31.82,31.82
                                            L186.648,50.083L154.828,18.263z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M362.565,98l-36.218,0.013c-1.906,0-3.763,1.042-5.634,1.28l92.496,92.498c0.238-1.871,1.278-3.728,1.278-5.634
                                            l0.013-36.22L362.565,98z" />
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="flex flex-col justify-center">
                                    <div class="text-lg">Laravel WebSockets</div>
                                    <div class="text-sm text-gray-400">{{ __("Real-time communication.") }}</div>
                                </div>
                            </div>
                        </div>
                    </a>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
