<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advisor Fee "Shock" Calculator | Point75 Tools</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            dark: '#0b0f19',
                            card: '#131c2e',
                            border: '#1e293b',
                            accent: '#3b82f6',
                            text: '#f8fafc',
                            muted: '#94a3b8'
                        }
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-brand-dark text-brand-text min-h-screen flex flex-col justify-between selection:bg-blue-500 selection:text-white">

    <!-- Header / Nav -->
    <header class="border-b border-brand-border bg-brand-dark/80 backdrop-blur-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <a href="/" class="flex items-center space-x-3">
                    <div class="h-8 w-8 rounded bg-gradient-to-br from-blue-600 to-indigo-700 flex items-center justify-center font-bold text-white tracking-wider">
                        75
                    </div>
                    <span class="font-semibold text-lg tracking-tight">Point75 <span class="text-blue-500 font-normal text-sm ml-1 px-2 py-0.5 rounded bg-blue-500/10 border border-blue-500/20">Tools</span></span>
                </a>
            </div>
            <nav class="flex items-center space-x-4 text-sm">
                <a href="/" class="text-brand-muted hover:text-brand-text transition-colors">&larr; Back to Dashboard</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 w-full flex-grow">
        <div class="mb-8">
            <h1 class="text-3xl font-bold tracking-tight text-white">Advisor Fee "Shock" Calculator</h1>
            <p class="mt-2 text-sm text-brand-muted">
                Quantify the compound wealth drag of traditional 1% management fees over 10, 20, and 30-year horizons.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Panel: Inputs -->
            <div class="bg-brand-card border border-brand-border rounded-xl p-6 lg:col-span-1 space-y-6">
                <h2 class="text-lg font-semibold text-white border-b border-brand-border pb-3">Parameters</h2>
                
                <div class="space-y-4">
                    <div>
                        <label class="block text-xs font-medium text-brand-muted mb-1">Initial Portfolio Value ($)</label>
                        <input type="number" id="initCapital" value="500000" step="50000" oninput="calculateFees()" class="w-full bg-brand-dark border border-brand-border rounded px-3 py-2 text-sm text-white focus:outline-none focus:border-blue-500">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-brand-muted mb-1">Annual Contribution ($)</label>
                        <input type="number" id="annualContrib" value="12000" step="1000" oninput="calculateFees()" class="w-full bg-brand-dark border border-brand-border rounded px-3 py-2 text-sm text-white focus:outline-none focus:border-blue-500">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-brand-muted mb-1">Gross Expected Return (%)</label>
                        <input type="number" id="grossReturn" value="8.0" step="0.5" oninput="calculateFees()" class="w-full bg-brand-dark border border-brand-border rounded px-3 py-2 text-sm text-white focus:outline-none focus:border-blue-500">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-brand-muted mb-1">Advisory Fee Rate (%)</label>
                        <input type="number" id="advisorFee" value="1.0" step="0.25" oninput="calculateFees()" class="w-full bg-brand-dark border border-brand-border rounded px-3 py-2 text-sm text-white focus:outline-none focus:border-blue-500">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-brand-muted mb-1">Time Horizon (Years)</label>
                        <input type="number" id="timeHorizon" value="25" step="1" oninput="calculateFees()" class="w-full bg-brand-dark border border-brand-border rounded px-3 py-2 text-sm text-white focus:outline-none focus:border-blue-500">
                    </div>
                </div>
            </div>

            <!-- Right Panel: Output Metrics & Comparison -->
            <div class="bg-brand-card border border-brand-border rounded-xl p-6 lg:col-span-2 space-y-6">
                <h2 class="text-lg font-semibold text-white border-b border-brand-border pb-3">Wealth Drag Impact Analysis</h2>
                
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="bg-brand-dark/50 border border-brand-border rounded-lg p-4">
                        <span class="text-xs text-brand-muted block">DIY Final Value (Net)</span>
                        <span id="resDiy" class="text-2xl font-bold text-green-400 mt-1 block">$0</span>
                    </div>
                    <div class="bg-brand-dark/50 border border-brand-border rounded-lg p-4">
                        <span class="text-xs text-brand-muted block">Managed Final Value</span>
                        <span id="resManaged" class="text-2xl font-bold text-white mt-1 block">$0</span>
                    </div>
                    <div class="bg-brand-dark/50 border border-brand-border rounded-lg p-4">
                        <span class="text-xs text-brand-muted block">Total Wealth Lost to Fees</span>
                        <span id="resLost" class="text-2xl font-bold text-red-400 mt-1 block">$0</span>
                    </div>
                </div>

                <div class="bg-brand-dark/50 border border-brand-border rounded-lg p-6 space-y-4">
                    <h3 class="text-sm font-semibold text-white">Compound Breakdown</h3>
                    <p id="insightText" class="text-sm text-brand-muted leading-relaxed">
                        Adjust parameters on the left to evaluate the long-term cost impact of management fees on your capital trajectory.
                    </p>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="border-t border-brand-border bg-brand-dark py-6 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-xs text-brand-muted">
            &copy; <?php echo date('Y'); ?> Point75 Tools. Calculations based on standard advisory fee schedules.
        </div>
    </footer>

    <!-- Calculation Engine -->
    <script>
        function formatCurrency(num) {
            return '$' + Math.round(num).toLocaleString();
        }

        function calculateFees() {
            let P = Number(document.getElementById('initCapital').value);
            let PMT = Number(document.getElementById('annualContrib').value);
            let rGross = Number(document.getElementById('grossReturn').value) / 100;
            let fee = Number(document.getElementById('advisorFee').value) / 100;
            let years = Number(document.getElementById('timeHorizon').value);

            let rNet = rGross - fee;

            let balanceDIY = P;
            let balanceManaged = P;

            for (let i = 0; i < years; i++) {
                balanceDIY = (balanceDIY + PMT) * (1 + rGross);
                balanceManaged = (balanceManaged + PMT) * (1 + rNet);
            }

            let totalLost = balanceDIY - balanceManaged;

            document.getElementById('resDiy').innerText = formatCurrency(balanceDIY);
            document.getElementById('resManaged').innerText = formatCurrency(balanceManaged);
            document.getElementById('resLost').innerText = formatCurrency(totalLost);

            document.getElementById('insightText').innerHTML = `Over <span class="text-white font-semibold">${years} years</span>, paying a <span class="text-white font-semibold">${(fee*100).toFixed(2)}%</span> annual fee results in <span class="text-red-400 font-semibold">${formatCurrency(totalLost)}</span> diverted away from your net accumulation, factoring in lost compounding returns.`;
        }

        // Run on load
        calculateFees();
    </script>
</body>
</html>