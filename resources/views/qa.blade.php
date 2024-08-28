@extends('layouts.layout')
@section('title')
    FQA
@endsection
@section('content')
  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                   <h2>FQA</h2><br><br>

                   <h6>Overheating</h6>
                    <ul>
                        <li>-> Ensure proper airflow around the computer.</li>
                        <li>-> Clean dust and debris from fans and vents.</li>
                        <li>-> Consider adding additional cooling solutions like more fans or a better CPU cooler.</li>
                    </ul>

                   <h6>Slow performance</h6>
                    <ul>
                        <li>-> Upgrade RAM if possible.</li>
                        <li>-> Perform disk defragmentation (for HDDs) or trim (for SSDs).</li>
                        <li>-> Close unnecessary background applications or processes.</li>
                    </ul>

                   <h6>Blue Screen of Death (BSOD)</h6>
                    <ul>
                        <li>-> Update device drivers.</li>
                        <li>-> Check for hardware compatibility issues.</li>
                        <li>-> Run hardware diagnostics to identify faulty components.</li>

                    </ul>

                   <h6> Hardware failure (e.g., hard drive failure)</h6>
                    <ul>
                        <li>-> Regularly back up important data to prevent loss.</li>
                        <li>-> Replace the faulty hardware component (e.g., hard drive, RAM stick).</li>
                        <li>-> Use diagnostic tools to identify and troubleshoot the failing hardware.</li>
                    </ul>

                   <h6>Noisy fans or hard drives</h6>
                    <ul>
                        <li>-> Clean dust and debris from fans and vents.</li>
                        <li>-> Replace worn-out or malfunctioning fans or hard drives.</li>
                        <li>-> Ensure proper mounting and alignment of components to reduce vibrations.</li>
                    </ul>

                   <h6>Peripheral connectivity issues</h6>
                    <ul>
                        <li>-> Check cable connections and try different ports</li>
                        <li>-> Update device drivers.</li>
                        <li>-> Test peripherals on another computer to isolate the issue.</li>
                    </ul>

                   <h6> Screen/display issues (e.g., flickering, no display)</h6>
                    <ul>
                        <li>-> Check cable connections between the monitor and computer.</li>
                        <li>-> Update graphics card drivers.</li>
                        <li>-> Test the monitor on another computer to determine if it's the source of the problem.</li>
                    </ul>

                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection

