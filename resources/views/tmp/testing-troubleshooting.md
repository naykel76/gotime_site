## Pagination Test is failing


### Summary

The pagination test was failing because:

1. **The component sorts users by `first_name` alphabetically** (default sort column)
2. **The test was creating random users** via factory, so their sort order was unpredictable
3. **The test assumed `$users->first()` and `$users->last()`** would be on pages 1 and 2 respectively, but they were sorted alphabetically by first name, not by their collection order

**The fix:** I created users with specific first names (`Aaron` and `Zachary`) to ensure they would be first and last when sorted alphabetically, making the test predictable and reliable.

All 6 tests in the file now pass! 🎉

Made changes.