# Changelog

## 3.0.1 - 2019-09-18
- Fixed public visibility not being respected when generating URLs for local files that are not in the webroot.

## 3.0.0 - 2019-09-16
- Updated minimum support requirements to PHP 7.2 and Laravel 5.6+.
- Added PHP 7 parameter and return type hints across the board
- Added a new method `getStreamResource` to `SourceAdapterInterface`, uploader will now attempt to use a stream to reduce memory usage.
- Added `delete()` method to `MediableCollection` for mass deleting media records and files.
- Added support for file visibility on a file-by-file basis.
- Cleaned up test suite.
- fixed a number of docblocks

## 2.9.0 - 2019-03-22
- The name of the Mediables pivot table is now configurable (Thanks @nadinengland!)

## 2.8.2 - 2019-03-08
- Fix windows paths pattern (Thanks @aalyusuf!)

## 2.8.1 - 2019-01-27
- Add methods to facade for IDE autocompletion (Thanks @simonschaufi!)

## 2.8.0 - 2018-09-20
- Added update on duplicate behaviour to MediaUploader (Thanks @pet1330!)
- Fixed remote URL data source raising an error when headers cannot be read (Thanks @sebdesign!)

## 2.7.3 - 2018-07-05
- Return correct types in source adapter methods (Thanks @sebdesign!)
- Add docblocks for Media properties and query scopes (Thanks @sebdesign!)

## 2.7.2 - 2018-07-03
- Fixed docblocks (Thanks @sebdesign!)

## 2.7.1 - 2018-06-04
- Fixed tags with numeric values

## 2.7.0 - 2018-05-11
- Added `MediaUploader::verifyFile()` to apply validation to a source without uploading (Thanks @JulesPrimo)
- Added `MediaUploader::beforeSave()` to allow editing custom fields on Media records before they are saved (Thanks @JulesPrimo)

## 2.6.2 - 2018-03-11
- Fix URL generation for local disks using symbolic links in different Laravel versions (Thanks @sebdesign !)

## 2.6.1 - 2018-02-20
- `MediaUploader::onDuplicateIncrement()` behaviour adjusted to use hyphens instead of parenthesis (Thanks @ryankilf!)

## 2.6.0 - 2018-02-13
- Added `Media::copyTo()` method (Thanks @johannesschobel!)

## 2.5.0 - 2017-08-30
- Added `Mediable::lastMedia()` convenience method (Thanks @pet1330!)

## 2.4.8 - 2017-08-18
- Added Laravel 5.5 package autodiscovery
- Fixed bugs due to method renamed in Laravel 5.5

## 2.4.7 - 2017-05-04
- Added missing use statements.

## 2.4.6 - 2017-05-04
- Fixed composer notation use.

## 2.4.5 - 2017-05-04
- Added fallback extension guesser to various SourceAdapters for cases where file path does not include extension (e.g. tmp files).

## 2.4.4 - 2017-03-08
- Fixed allowed extension checking failing due to case mismatch

## 2.4.3 - 2017-02-15
- Restored Laravel 5.2 compatibility
- `S3UrlGenerator` now generates the url directly with S3 client, instead of with the `FilesystemAdapter::url()` method, which was only added in Laravel 5.2.15
- Added fallback for `wherePivotIn()` used in eager loading, which was only added in Laravel 5.3

## 2.4.2 - 2017-02-12
- Fixed issues cause by Laravel 5.4 backwards-compatibility breaks
- Increased laravel minumum version to 5.3, which is the minimum that works with the current implementation. Will attempt to restore support for older versions in an upcoming release.


## 2.4.1 - 2016-12-30
- The `onDuplicateDelete` action of the `MediaUploader` now manually deletes the `Media` record and the file on disk, instead of depending on the record existing to clean its own file.

## 2.4.0 - 2016-12-10
- Added support for raw content strings to `MediaUploader` (Thanks @sebdesign)
- Added support for stream resources to `MediaUploader` (Thanks @sebdesign)
- Added support for PSR-7 StreamInterface objects to `MediaUploader` (Thanks @sebdesign)
- All SourceAdapters now properly adhere to the described interface.
- Refactored test suite for speed.

## 2.3.0 - 2016-11-17
- Separated MediaUploadException into a number of subclasses for more granular exception handling (Thanks @sebdesign!).
- Added HandlesMediaUploadExceptions trait for converting MediaUploadExceptions into HttpException with appropriate error codes (Thanks @sebdesign).

## 2.2.3 - 2016-11-13
- Fixed SQL escaping issue in `Mediable::getOrderValueForTags`.

## 2.2.2 - 2016-10-07
- Fixed `Media::scopeForPathOnDisk` not working when path does not contain a directory (Thanks @geidelguerra!).

## 2.2.1 - 2016-10-05
- Fixed typo in `MediaUploader`'s `OnDuplicateError` behaviour (Thanks @geidelguerra!).

## 2.2.0 - 2016-09-30
- Added handling for symlinked local disks.
- fixed minor issue where variable could be undefined.

## 2.1.0 - 2016-09-24
- Added means of removing order by from media relation query.
- Fixed multiple media passed to `attachMedia()` or `syncMedia()` receiving the same order value.
- Fixed issue with ONLY_FULL_GROUP_BY (MySQL 5.6.5+).
- Reworked `attachMedia()` to optimize the number of executed queries.


## 2.0.0 - 2016-09-17
- `Mediable` models now remember the order in which `Media` is attached to each tag.
- Renamed a few `MediaUploader` methods.
- Facilitated setting `MediaUploader` on-duplicate behaviour. Thanks @jdhmtl.
- `MediaUploader` can now generate filenames using hash of file contents (Thanks @geidelguerra!).
- Added `import()` and `update()` methods to `MediaUploader`.

## 1.1.1 - 2016-08-16
- Published migration file now uses dynamic timestamp (Thanks @borisdamevin!).

## 1.1.0 - 2016-08-14
- Added behaviour for detaching mediable relationships when Media or Mediable models are deleted or soft deleted.

## 1.0.1 - 2016-08-12
- Fixed `Mediable` relationship not connecting to custom `Media` subclass defined in config.

## 1.0.0 - 2016-08-04
- Added match-all case to media eager load helpers.
- `Mediable::getTagsForMedia()` now properly rehydrates media if necessary.
- `Mediable::load()` now looks for media that is either the $relationship key or value.

## 0.3.0 - 2016-07-25
- Added MediaCollection class.
- Added media eager loading helpers to query builder, `Mediable`, and MediaCollection.

## 0.2.0 - 2016-07-21
- Added object typehints to all appropriate functions and closures.
