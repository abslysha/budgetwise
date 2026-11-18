<div class="sidebar">
    <h2>🌱 BudgetWise</h2>
    <a href="dashboard.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : ''; ?>">▦ Dashboard</a>
    <a href="add_expense.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'add_expense.php' ? 'active' : ''; ?>">＋ Add Expense</a>
    <a href="budget.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'budget.php' ? 'active' : ''; ?>">◉ Monthly Budget</a>
    <a href="expenses.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'expenses.php' ? 'active' : ''; ?>">▤ Expenses</a>
    <a href="summary.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'summary.php' ? 'active' : ''; ?>">◔ Monthly Summary</a>
    <a href="profile.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'profile.php' ? 'active' : ''; ?>">◯ Profile & Settings</a>
    <a href="logout.php" style="margin-top: auto; color: #d9534f;">↪ Log Out</a>
</div>