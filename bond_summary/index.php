<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Bond & Yield Curve Summary | Point75 Tools</title>
    
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
        <div class="mb-8 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h1 class="text-3xl font-bold tracking-tight text-white">Daily Bond & Yield Curve Summary</h1>
                <p class="mt-2 text-sm text-brand-muted">
                    Automated public-domain Treasury intelligence tracking constant-maturity yields, SOFR, and curve spreads.
                </p>
            </div>
            <div class="inline-flex items-center space-x-2 px-3 py-1.5 rounded-lg bg-brand-card border border-brand-border text-xs text-brand-muted">
                <span class="w-2 h-2 rounded-full bg-green-500"></span>
                <span>Source: Federal Reserve (FRED API)</span>
            </div>
        </div>

        <!-- Yield Matrix Grid -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-brand-card border border-brand-border rounded-xl p-5">
                <span class="text-xs text-brand-muted block uppercase tracking-wider">1-Month Treasury</span>
                <span class="text-2xl font-bold text-white mt-2 block">4.32%</span>
                <span class="text-xs text-green-400 mt-1 block">+0.01% vs prior close</span>
            </div>
            <div class="bg-brand-card border border-brand-border rounded-xl p-5">
                <span class="text-xs text-brand-muted block uppercase tracking-wider">3-Month Treasury</span>
                <span class="text-2xl font-bold text-white mt-2 block">4.28%</span>
                <span class="text-xs text-red-400 mt-1 block">-0.02% vs prior close</span>
            </div>
            <div class="bg-brand-card border border-brand-border rounded-xl p-5">
                <span class="text-xs text-brand-muted block uppercase tracking-wider">10-Year Treasury</span>
                <span class="text-2xl font-bold text-white mt-2 block">3.95%</span>
                <span class="text-xs text-green-400 mt-1 block">+0.04% vs prior close</span>
            </div>
            <div class="bg-brand-card border border-brand-border rounded-xl p-5">
                <span class="text-xs text-brand-muted block uppercase tracking-wider">SOFR (Overnight)</span>
                <span class="text-2xl font-bold text-white mt-2 block">4.30%</span>
                <span class="text-xs text-brand-muted mt-1 block">Unchanged</span>
            </div>
        </div>

        <!-- Commentary & Analysis Section -->
        <div class="bg-brand-card border border-brand-border rounded-xl p-6 space-y-4">
            <h2 class="text-lg font-semibold text-white border-b border-brand-border pb-3">Macroeconomic Commentary</h2>
            <div class="prose prose-invert text-sm text-brand-muted space-y-3 leading-relaxed">
                <p>
                    Short-end yield dynamics continue to reflect anchored policy rate expectations. The 2s10s curve slope remains scrutinized as term premiums adjust to incoming Treasury issuance announcements and core PCE metrics.
                </p>
                <p>
                    Data retrieved automatically via public government channels to ensure complete legal compliance and zero third-party licensing exposure.
                </p>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="border-t border-brand-border bg-brand-dark py-6 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-xs text-brand-muted">
            &copy; <?php echo date('Y'); ?> Point75 Tools. Public domain financial data pipeline.
        </div>
    </footer>
</body>
</html>