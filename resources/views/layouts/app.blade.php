<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/wopa.css') }}">
    <link rel="stylesheet" href="{{ asset('css/leaderboard.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="apple-touch-icon" href="{{ asset('images/favicon.png') }}">

    <link href="https://fonts.googleapis.com/css2?family=Delius&family=Loved+by+the+King&family=Manrope:wght@200..800&family=Nosifer&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.slim.min.js" integrity="sha512-sNylduh9fqpYUK5OYXWcBleGzbZInWj8yCJAU57r1dpSK9tP2ghf/SRYCMj+KsslFkCOt3TvJrX2AV/Gc3wOqA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script src="https://unpkg.com/@fuel-ts/script@0.97.0/dist/index.js"></script> -->
            <!-- <script src="https://unpkg.com/@fuel-js/wallet@latest/umd/fuel.umd.min.js" type="text/javascript">
        </script> -->
        <link rel="modulepreload" href="/build/assets/app-21a188d8.js">
        <script type="module" src="/build/assets/app-21a188d8.js"></script>

</head>
<body>
    <div class="sc-iFwKgL hUqJja">
        @include('partials.header')
        
        @yield('content')
<style>
  .sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border-width: 0;
}
.text-white {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity, 1));
}

.fill-white {
    fill: #00f58c;
}
.animate-spin {
    animation: spin 1s linear infinite;
}
.w-4 {
    width: 1rem;
}
.h-4 {
    height: 1rem;
}
@keyframes spin {
 100% {
      transform: rotate(360deg);
  } 
}

</style>
<div class="fuel-connectors" style="display:none; position: fixed; inset: 0px; height: 100%; width: 100%; margin: 0px; padding: 0px; z-index: 99; font-family: var(--fuel-font-family); font-size: var(--fuel-font-size); pointer-events: auto; background-color: var(--fuel-overlay-background); animation: 150ms cubic-bezier(0.16, 1, 0.3, 1) 0s 1 normal none running fuelOverlayShow; --fuel-font-family: &quot;Inter&quot;, &quot;Segoe UI&quot;, &quot;Roboto&quot;, &quot;Oxygen&quot;, &quot;Ubuntu&quot;, &quot;Cantarell&quot;, &quot;Fira Sans&quot;, &quot;Droid Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; --fuel-font-size: 16px; --fuel-font-size-xs: 12px; --fuel-letter-spacing: -0.64px; --fuel-border-radius: 6px; --fuel-items-gap: 8px; --fuel-border: 1px solid var(--fuel-border-color); --fuel-color-error: #f25a68; --fuel-color: #e4e7e7; --fuel-color-bold: #ffffff; --fuel-dialog-background: rgb(25 26 26); --fuel-overlay-background: rgba(20, 20, 20, 0.8); --fuel-connector-background: rgba(255, 255, 255, 0.02); --fuel-connector-hover: rgba(255, 255, 255, 0.05); --fuel-border-color: rgba(255, 255, 255, 0.05); --fuel-border-hover: hsla(0, 0%, 50%, 1); --fuel-button-background: hsla(0, 0%, 30%, 1); --fuel-button-background-hover: hsla(0, 0%, 40%, 1); --fuel-loader-background: linear-gradient(to right, hsl(0, 0%, 20%) 8%, hsl(0, 0%, 25%) 18%, hsl(0, 0%, 20%) 33%); --fuel-green-3: #0F2E1B; --fuel-green-11: #00DD75; --fuel-blue-3: #0D2847; --fuel-blue-11: #70B9FF; --fuel-gray-10: #7b7b7b; --fuel-gray-11: #b4b4b4; --fuel-gray-12: #eee; --fuel-separator-color: rgb(165 165 165 / 13%); --fuel-black-color: #141414;">
  <div role="dialog" id="radix-:r6:" aria-describedby="radix-:r8:" aria-labelledby="radix-:r7:" data-state="open" data-connector="false" class="fuel-connectors-dialog-content" tabindex="-1" style="display: flex; flex-direction: column; overflow: hidden; color: var(--fuel-color); user-select: none; max-height: calc(100% - 20px); background-color: var(--fuel-dialog-background); position: fixed; left: 50%; transform: translate(-50%, -50%); border-radius: 36px; padding: 14px 0px 36px; animation: 150ms cubic-bezier(0.16, 1, 0.3, 1) 0s 1 normal none running fuelContentShow; top: 50%; width: 360px; max-width: calc(100% - 20px); box-shadow: rgba(14, 18, 22, 0.35) 0px 10px 38px -10px, rgba(14, 18, 22, 0.2) 0px 10px 20px -15px; pointer-events: auto;">
    <div style="display: flex;align-items: center;justify-content: space-between;padding-left: 16px;padding-right: 16px;flex-direction: row;">
      <h2 id="radix-:r7:" style="padding: 8px 14px 12px; margin: 0px; text-align: center; font-size: var(--fuel-font-size); font-weight: 500;">Connect Wallet</h2>
      <svg fill="none" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16" type="button" class="fuel-connectors-close-icon" style="fill: var(--fuel-color); padding: 7px; border-radius: 12px; display: flex; align-items: center; justify-content: center; cursor: pointer;">
        <title>Close Icon</title>
        <path fill="currentColor" fill-rule="evenodd" d="M2.54 2.54a1 1 0 0 1 1.42 0L8 6.6l4.04-4.05a1 1 0 1 1 1.42 1.42L9.4 8l4.05 4.04a1 1 0 0 1-1.42 1.42L8 9.4l-4.04 4.05a1 1 0 0 1-1.42-1.42L6.6 8 2.54 3.96a1 1 0 0 1 0-1.42Z" clip-rule="evenodd"></path>
      </svg>
    </div>
    <div style="height: 1px; width: 100%; background-color: var(--fuel-border-color); margin: 10px 0px; padding: 0px;"></div>
    <div style="position: relative; overflow-y: auto;">
      <div style="display: flex; flex-direction: column; align-items: center; gap: var(--fuel-items-gap); padding: 0px 14px;">
        <p style="width: 100%; color: rgb(121, 121, 121); font-size: var(--fuel-font-size-xs); font-style: normal; font-weight: 400; margin: 0px;">Fuel Native Wallets</p>
        <div tabindex="2" aria-label="Connect to Fuel Wallet"  data-connected="false" class="fuel-connectors-connector-item" style="display: flex;align-items: center;box-sizing: border-box;cursor: pointer;width: 100%;gap: var(--fuel-items-gap);padding: 0.8em;border-radius: 16px;font-weight: 400;flex-direction: row;">
          <img height="32px" width="32px" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzIiIGhlaWdodD0iMzIiIHZpZXdCb3g9IjAgMCA0OTEgNDk2IiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHRoZW1lPSJkYXJrIj48dGl0bGU+RnVlbCBXYWxsZXQgSWNvbjwvdGl0bGU+PHJlY3QgeD0iNDIuNTUzNSIgeT0iMjguMzQzOCIgd2lkdGg9IjM5Ny4xNTQiIGhlaWdodD0iNDI1LjE0MyIgZmlsbD0iIzA4MDgwOCI+PC9yZWN0PjxwYXRoIGQ9Ik0zMi42MTc4IDBDMTQuNTY5NyAwIDAgMTQuNzMyNyAwIDMyLjk4MjZWNDk2SDQwNS44NTJDNDE5LjU2OCA0OTYgNDMyLjc1OSA0OTAuNDkyIDQ0Mi40NzMgNDgwLjY3TDQ3NS4zNTMgNDQ3LjQyMkM0ODUuMDY2IDQzNy42IDQ5MC41MTMgNDI0LjI2MSA0OTAuNTEzIDQxMC4zOTFWMEgzMi42MTc4Wk0zMjAuMjcxIDYzLjc3NTJMMTYwLjcyNiAyMjUuMTA1QzE1Ni43ODggMjI5LjA4NiAxNTEuNDA3IDIzMS4zNDMgMTQ1LjgyOCAyMzEuMzQzQzEzNy42OSAyMzEuMzQzIDEzMC4yMDggMjI2LjU2NSAxMjYuNzMgMjE5LjEzMkw2NC45MDc0IDg3LjAwMjRDNTkuODUzOSA3Ni4xODUyIDY3LjY2MzggNjMuNzc1MiA3OS40NzcxIDYzLjc3NTJIMzIwLjI3MVpNNjMuMDY5NyA0MzIuMjI1VjI3NS4yNzVDNjMuMDY5NyAyNjYuOTE0IDY5Ljc2MzkgMjYwLjE0NSA3OC4wMzMyIDI2MC4xNDVIMjMzLjI0Nkw2My4wNjk3IDQzMi4yMjVaTTI0Ni4xMSAyMzEuMzQzSDE5NC43MjJMMzQ5LjM0NSA3NC45OTA2QzM1Ni40MzMgNjcuODIzNCAzNjYuMDggNjMuNzc1MiAzNzYuMTIxIDYzLjc3NTJINDI3LjUwOUwyNzIuODg3IDIyMC4xMjdDMjY1Ljc5OSAyMjcuMjk1IDI1Ni4xNTEgMjMxLjM0MyAyNDYuMTEgMjMxLjM0M1oiIGZpbGw9IiMwMEY1OEMiPjwvcGF0aD48L3N2Zz4=" alt="Fuel Wallet icon">
          <div style="font-size: 0.875em;">Fuel Wallet</div>
          <div class="Fuel" style="display:none; border-radius: var(--fuel-border-radius); font-size: var(--fuel-font-size-xs); padding: 2px 8px; text-transform: uppercase; margin-left: auto; background-color: var(--fuel-blue-3); color: var(--fuel-blue-11);">Installed</div>
          <div role="status" style="display: none; margin-left: auto;">
              <svg aria-hidden="true" class="w-4 h-4 text-white animate-spin dark:text-gray-100 fill-white" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"></path>
                  <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"></path>
              </svg>
              <span class="sr-only">Loading...</span>
          </div>
        </div>
        <div tabindex="3" aria-label="Connect to Fuelet Wallet" data-connected="false" class="fuelet-connectors-connector-item" style="display: flex;align-items: center;box-sizing: border-box;cursor: pointer;width: 100%;gap: var(--fuel-items-gap);padding: 0.8em;border-radius: 16px;font-weight: 400;flex-direction: row;">
          <img height="32px" width="32px" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzIiIGhlaWdodD0iMzIiIHZpZXdCb3g9IjAgMCA0MCA0MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48dGl0bGU+RnVlbGV0IEljb248L3RpdGxlPjxwYXRoIGQ9Ik0yMCA0MEMxNC45MzU1IDQwIDEwLjMxNDUgMzguMTE0IDYuNzkwNSAzNS4wMTA1TDE4LjE0NiAyNi45MDdDMTguODQ1IDI2LjQwODUgMTkuODA2NSAyNi45NjQ1IDE5LjcyMiAyNy44MTk1TDE5LjI3NDUgMzIuMzYwNUMxOS4xODIgMzMuMjk1IDIwLjMxMjUgMzMuODI5NSAyMC45NzY1IDMzLjE2NTVMMjcuMDcxIDI3LjA3MUMzMS4wNjIgMjMuMDggMzAuOTc0NSAxNi41NTU1IDI2LjgwODUgMTIuNjc1NUMyMi44NDA1IDguOTggMTYuNTkzNSA5LjI2NCAxMi43NTk1IDEzLjA5ODVMNi44NTMgMTkuMDA0NUM2LjE4NyAxOS42NzEgNi43Mjc1IDIwLjgwNDUgNy42NjQ1IDIwLjcwNjVMMTIuMjA5IDIwLjIzMUMxMy4wNjU1IDIwLjE0MTUgMTMuNjI3NSAyMS4xMDUgMTMuMTI3IDIxLjgwNjVMNC45ODk1IDMzLjIwOTVDMS44ODYgMjkuNjg1NSAwIDI1LjA2NDUgMCAyMEMwIDguOTU0NSA4Ljk1NDUgMCAyMCAwQzMxLjA0NTUgMCA0MCA4Ljk1NDUgNDAgMjBDNDAgMzEuMDQ1NSAzMS4wNDU1IDQwIDIwIDQwWiIgZmlsbD0id2hpdGUiPjwvcGF0aD48L3N2Zz4=" alt="Fuelet Wallet icon">
          <div style="font-size: 0.875em;">Fuelet Wallet</div>
          <div class="Fuelet" style="display:none; border-radius: var(--fuel-border-radius); font-size: var(--fuel-font-size-xs); padding: 2px 8px; text-transform: uppercase; margin-left: auto; background-color: var(--fuel-blue-3); color: var(--fuel-blue-11);">Installed</div>
          <div role="status" style="display: none; margin-left: auto;">
              <svg aria-hidden="true" class="w-4 h-4 text-white animate-spin dark:text-gray-100 fill-white" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"></path>
                  <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"></path>
              </svg>
              <span class="sr-only">Loading...</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    </div>
</body>
</html>